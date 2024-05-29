<?php

namespace App\Controllers;
use App\Models\Grupo;

class GrupoController extends Controller
{
    public function index()
    {
        $model = new Grupo();

        if (isset($_GET['search'])) {
            $grupos = $model->where('IdGrupo', 'like', '%' . $_GET['search'] . '%')->get();
        } else {
            $grupos = $model->all();
        }
        return $this->view('grupos.index', compact('grupos'));
    }
    public function create()
    {
        return $this->view('grupos.create');
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
        return $this->view('grupos.show', compact('grupo'));
    }
    public function edit($id)
    {
        $model = new Grupo();
        $grupo = $model->find($id);
        return $this->view('grupos.edit', compact('grupo'));
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
