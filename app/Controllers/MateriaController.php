<?php
namespace App\Controllers;
use App\Models\Materia;

class MateriaController extends Controller
{
    public function __construct()
    {
        $this->checkAuth();
    }
    public function index()
    {
        $model = new Materia();

        if (isset($_GET['search'])) {
            $materias = $model->where('Materia', 'like', '%' . $_GET['search'] . '%')->get();
        } else {
            $materias = $model->all();
        }
        return $this->view('materia.index', compact('materias'));
    }

    public function create()
    {
        return $this->view('materia.create');
    }

    public function store()
    {
        $data = $_POST;
        $model = new Materia();
        $model->create($data);
        return $this->redirect('/materias');
    }

    public function show($id)
    {
        $model = new Materia();
        $materia = $model->find($id);
        return $this->view('materia.show', compact('materia'));
    }

    public function edit($id)
    {
        $model = new Materia();
        $materia = $model->find($id);
        return $this->view('materia.edit', compact('materia'));
    }

    public function update($id)
    {
        unset($_POST['_method']);
        $data = $_POST;
        $model = new Materia();
        $model->update($id, $data);
        return $this->redirect('/materias');
    }

    public function destroy($id)
    {
        $model = new Materia();
        $model->delete($id);
        return $this->redirect('/materias');
    }
}
