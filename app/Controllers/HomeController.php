<?php

namespace App\Controllers;
use App\Models\Contact;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->checkAuth();
    }

    public function auth()
    {
       if (isset($_SESSION['Nombre'])) {
           return $this->redirect('/home');
       } else {
           return $this->view('auth.login');
       }
    }

    public function index()
    {
        return $this->view('home');
    }

}

