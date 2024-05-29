<?php

namespace App\Controllers;

use App\Models\Materia;
use App\Models\Grupo;
use App\Models\Profesor;

class GrupoController extends Controller
{
    public function index()
    {
        $modelGrupo = new Grupo();
        $modelMateria = new Materia();
        $modelProfesor = new Profesor();

        if (isset($_GET['search'])) {
            $grupos = $modelGrupo->where('IdGrupo', 'like', '%' . $_GET['search'] . '%')->get();
        } else {
            $grupos = $modelGrupo->all();
        }

        foreach ($grupos as $key => $grupo) {
            $materia = $modelMateria->find($grupo['ID_Materia']);
            $profesor = $modelProfesor->find($grupo['ID_Profesor']);
            $grupos[$key]['Nombre_Materia'] = $materia['Materia'];
            $grupos[$key]['Nombre_Profesor'] = $profesor['Nombre'].' '.$profesor['Apellidos'];
        }

        return $this->view('grupos.index', compact('grupos'));
    }
    public function create()
    {
        
        $modelMateria = new Materia();
        $modelProfesor = new Profesor();

        $materias = $modelMateria->select('ID','Materia')->orderBy('Materia')->get();
        $profesores = $modelProfesor->select('ID','Nombre','Apellidos')->orderBy('Nombre')->get();
        
        $data = [
            'materias' => $materias,
            'profesores' => $profesores
        ];

        return $this->view('grupos.create', $data);
    }
    public function store()
    {
        $data = $_POST;
        $model = new Grupo();
        $model->create($data);
        return $this->redirect('/grupos');
    }
    public function show($id)
    {
        $model = new Grupo();
        $grupo = $model->find($id);

        $modelMateria = new Materia();
        $modelProfesor = new Profesor();

        $materia = $modelMateria->find($grupo['ID_Materia']);
        $profesor = $modelProfesor->find($grupo['ID_Profesor']);
        $grupo['Nombre_Materia'] = $materia['Materia'];
        $grupo['Nombre_Profesor'] = $profesor['Nombre'] . ' ' . $profesor['Apellidos'];
        
        return $this->view('grupos.show', compact('grupo'));
    }
    public function edit($id)
    {
        $modelGrupo = new Grupo();
        $modelMateria = new Materia();
        $modelProfesor = new Profesor();
        $grupo = $modelGrupo->find($id);

        $materias = $modelMateria->select('ID','Materia')->orderBy('Materia')->get();
        $profesores = $modelProfesor->select('ID','Nombre','Apellidos')->orderBy('Nombre')->get();

        $materia = $modelMateria->find($grupo['ID_Materia']);
        $profesor = $modelProfesor->find($grupo['ID_Profesor']);
        $grupo['Nombre_Materia'] = $materia['Materia'];
        $grupo['Nombre_Profesor'] = $profesor['Nombre'] . ' ' . $profesor['Apellidos'];
        
        $data = [
            'materias' => $materias,
            'profesores' => $profesores,
            'grupo' => $grupo
        ];

        return $this->view('grupos.edit', $data);
    }
    public function update($id)
    {
        unset($_POST['_method']);
        $data = $_POST;
        $model = new Grupo();
        $model->update($id, $data);
        return $this->redirect('/grupos');
    }
    public function destroy($id)
    {
        $model = new Grupo();
        $model->delete($id);
        return $this->redirect('/grupos');
    }
}
