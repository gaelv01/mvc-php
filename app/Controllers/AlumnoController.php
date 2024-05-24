<?php
namespace App\Controllers;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index()
    {
        $model = new Alumno();

        if (isset($_GET['search'])) {
            $alumnos = $model->where('Nombre', 'like', '%'.$_GET['search'].'%')->paginate(1);
        }
        else {
            $alumnos = $model->paginate(3);
        }
        return $this->view('alumnos.index', compact('alumnos'));
    }
    public function create()
    {
        return $this->view('alumnos.create');
    }
    public function store()
    {
        // Retornar parámetros de la petición
        $data = $_POST;
        $model = new Alumno();
        $model->create($data);
        return $this->redirect('/alumnos');
    }
    public function show($id)
    {
        $model = new Alumno(); 
        $alumno = $model->find($id);
        return $this->view('alumnos.show', compact('alumno'));
    }
    public function edit($id)
    {
        $model = new Alumno();
        $alumno = $model->find($id);
        return $this->view('alumnos.edit', compact('alumno'));
    }
    public function update($id)
    {
        unset($_POST['_method']);
        $data = $_POST;
        $model = new Alumno();
        $model->update($id, $data);
        return $this->redirect('/alumnos/'.$id);
        
    }
    public function destroy($id)
    {
        $model = new Alumno();
        $model->delete($id);
        return $this->redirect('/alumnos');
    }


}

