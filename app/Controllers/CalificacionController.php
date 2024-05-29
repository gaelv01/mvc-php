<?php

namespace App\Controllers;

class CalificacionController extends Controller
{
    public function index()
    {
        return $this->view('calificaciones.index');
    }
}