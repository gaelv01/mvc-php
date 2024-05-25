<?php

namespace App\Controllers;
use App\Models\Contact;

class HomeController extends Controller
{
    
    public function index()
    {
       return $this->view('home',
       [
           'title' => 'Inicio',
           'description' => 'Esta es la pagina de inicio'
       ]);
    }


}

