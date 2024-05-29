<?php

namespace App\Controllers;

class CalificacionController extends Controller
{
    public function __construct()
    {
        $this->checkAuth();
    }

    public function index()
    {
        return $this->view('calificaciones.index');
    }
}