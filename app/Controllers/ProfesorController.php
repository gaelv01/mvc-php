<?php

namespace App\Controllers;

use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function index()
    {
        $model = new Profesor();
        if (isset($_GET['search'])) {
            $profesores = $model->where('Nombre', 'like', '%' . $_GET['search'] . '%')->get(1);
        } else {
            $profesores = $model->get();
        }
        return $this->view('profesores.index', compact('profesores'));
    }
    public function create()
    {
        return $this->view('profesores.create');
    }
    public function store()
    {
        $data = $_POST;
        $model = new Profesor();
        $model->create($data);
        return $this->redirect('/profesores');
    }
    public function show($id)
    {
        $model = new Profesor();
        $profesor = $model->find($id);
        return $this->view('profesores.show', compact('profesor'));
    }
    public function edit($id)
    {
        $model = new Profesor();
        $profesor = $model->find($id);
        return $this->view('profesores.edit', compact('profesor'));
    }
    public function update($id)
    {
        unset($_POST['_method']);
        $data = $_POST;
        $model = new Profesor();
        $model->update($id, $data);
        return $this->redirect('/profesores/' . $id);
    }
    public function destroy($id)
    {
        $model = new Profesor();
        $model->delete($id);
        return $this->redirect('/profesores');
    }
}

