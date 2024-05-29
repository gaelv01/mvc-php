<?php

namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $model = new Usuario();
        if (isset($_GET['search'])) {
            $usuarios = $model->where('Nombre', 'like', '%' . $_GET['search'] . '%')->get();
        } else {
            $usuarios = $model->all();
        }
        return $this->view('usuario.index', compact('usuarios'));
    }
    public function create()
    {
        return $this->view('usuario.create');
    }
    public function store()
    {
        $data = $_POST;
        $model = new Usuario();
        $model->create($data);
        return $this->redirect('/usuarios');
    }
    public function show($id)
    {
        $model = new Usuario();
        $usuario = $model->find($id);
        return $this->view('usuario.show', compact('usuario'));
    }
    public function edit($id)
    {
        $model = new Usuario();
        $usuario = $model->find($id);
        return $this->view('usuario.edit', compact('usuario'));
    }
    public function update($id)
    {
        unset($_POST['_method']);
        $data = $_POST;
        $model = new Usuario();
        $model->update($id, $data);
        return $this->redirect('/usuarios/' . $id);
    }
    public function destroy($id)
    {
        $model = new Usuario();
        $model->delete($id);
        return $this->redirect('/usuarios');
    }
}

