<?php

namespace App\Controllers;

use App\Models\Administrador;

class AdministradorController extends Controller
{
    public function index()
    {
        $model = new Administrador();
        if (isset($_GET['search'])) {
            $administradores = $model->where('Nombre', 'like', '%' . $_GET['search'] . '%')->paginate(1);
        } else {
            $administradores = $model->paginate(10);
        }
        return $this->view('administrador.index', compact('administradores'));
    }

    public function create()
    {
        return $this->view('administrador.create');
    }

    public function store()
    {
        $data = $_POST;
        $model = new Administrador();
        $model->create($data);
        return $this->redirect('/admin');
    }

    public function show($id)
    {
        $model = new Administrador();
        $administrador = $model->find($id);
        return $this->view('administrador.show', compact('administrador'));
    }

    public function edit($id)
    {
        $model = new Administrador();
        $administrador = $model->find($id);
        return $this->view('administrador.edit', compact('administrador'));
    }

    public function update($id)
    {
        unset($_POST['_method']);
        $data = $_POST;
        $model = new Administrador();
        $model->update($id, $data);
        return $this->redirect('/admin/' . $id);
    }

    public function destroy($id)
    {
        $model = new Administrador();
        $model->delete($id);
        return $this->redirect('/admin');
    }
}

