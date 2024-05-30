<?php

namespace App\Controllers;

use App\Models\Calificacion;
use App\Models\Alumno;
use App\Models\Grupo;
use App\Models\Materia;

class CalificacionController extends Controller
{
    public function __construct()
    {
        $this->checkAuth();
    }

    public function index()
    {

        if ($_SESSION['Tipo'] == 'A') {
            return $this->redirect('/calificaciones/' . $_SESSION['Login']);
        }

        $modelAlumno = new Alumno();

        if (isset($_GET['search'])) {
            $alumnos = $modelAlumno->where('ID', '=', $_GET['search'])->get();
        } else {
            $alumnos = $modelAlumno->get();
        }
        return $this->view('calificaciones.index', compact('alumnos'));
    }


    public function show($id)
    {

        $modelCalificacion = new Calificacion();
        $modelAlumno = new Alumno();
        $modelMateria = new Materia();

        $alumno = $modelAlumno->find($id);

        $calificaciones = $modelCalificacion->where('ID_Alumno', '=', $id)->get();


        foreach ($calificaciones as $key => $calificacion) {
            $materia = $modelMateria->find($calificacion['ID_Materia']);
            $calificaciones[$key]['Materia'] = $materia['Materia'];
        }

        $data = [
            'Nombre_Alumno' => $alumno['Nombre'] . ' ' . $alumno['Apellidos'],
            'calificaciones' => $calificaciones,
            'id' => $id
        ];


        $_SESSION['calif_id'] = $data['id'];

        return $this->view('calificaciones.show', $data);
    }

    public function create()
    {
        $id = $_SESSION['calif_id'];

        $modelCalificacion = new Calificacion();
        $modelAlumno = new Alumno();
        $modelMateria = new Materia();

        $alumno = $modelAlumno->select('Nombre', 'Apellidos', 'IdGrupo')->where('ID', '=', $id)->first();

        $calificaciones = $modelCalificacion->where('ID_Alumno', '=', $id)->get();

        $materias = $modelMateria->select('ID', 'Materia')->orderBy('Materia')->get();
        foreach ($calificaciones as $key => $calificacion) {
            $materia = $modelMateria->find($calificacion['ID_Materia']);
            $calificaciones[$key]['Materia'] = $materia['Materia'];
        }

        $data = [
            'Nombre_Alumno' => $alumno['Nombre'] . ' ' . $alumno['Apellidos'],
            'Grupo' => $alumno['IdGrupo'],
            'Materias' => $materias,
            'Calificaciones' => $calificaciones,
            'id' => $id
        ];


        return $this->view('calificaciones.create', $data);
    }

    public function store()
    {

        $modelAlumno = new Alumno();
        $grupo = $modelAlumno->select('IdGrupo')->where('ID', '=', $_SESSION['calif_id'])->first();


        $data = $_POST;
        $data['ID_Alumno'] = $_SESSION['calif_id'];
        $data['IdGrupo'] = $grupo['IdGrupo'];

        $model = new Calificacion();
        $model->create($data);
        return $this->redirect('/calificaciones/' . $_SESSION['calif_id']);
    }

    public function edit($id, $idCal)
    {
        $id = intval($id);
        $idCal = intval($idCal);


        $modelMateria = new Materia();
        $materias = $modelMateria->select('ID', 'Materia')->orderBy('Materia')->get();


        $modelAlumno = new Alumno();
        $alumno = $modelAlumno->select('Nombre', 'Apellidos')->where('ID', '=', $id)->first();

        $modelCalificacion = new Calificacion();
        $calificacion = $modelCalificacion->find($idCal);

        $modelMateria2 = new Materia();
        $materia = $modelMateria2->select('Materia')->where('ID', '=', $calificacion['ID_Materia'])->first();



        $data = [
            'id' => $idCal,
            'ID_Alumno' => $id,
            'ID_Materia' => $calificacion['ID_Materia'],
            'IdGrupo' => $calificacion['IdGrupo'],
            'Calificacion' => $calificacion['Calificacion']
        ];

        $completeData = [
            'Nombre_Alumno' => $alumno['Nombre'] . ' ' . $alumno['Apellidos'],
            'Materias' => $materias,
            'ActualMateria' => $materia['Materia'], // 'Materia' => 'Matematicas
            'data' => $data
        ];

        return $this->view('calificaciones.edit', compact('completeData'));
    }

    public function update($id, $idCal)
    {
        $model = new Calificacion();
        $data = $_POST;
        $model->update($idCal, $data);
        return $this->redirect('/calificaciones/' . $id);
    }

    public function destroy($id, $idCal)
    {
        $model = new Calificacion();
        $model->delete($idCal);
        return $this->redirect('/calificaciones/' . $id);
    }
}
