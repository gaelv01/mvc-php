<?php
namespace App\Controllers;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnoModel = new Alumno();
        return $alumnoModel->all();
        // return $this->view('home', [
        //     'title' => 'Alumnos',
        //     'description' => 'Esta es la pagina de alumnos',
        // ]);
    }
}