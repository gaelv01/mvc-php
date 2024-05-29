<?php

namespace App\Controllers;

use App\Models\Usuario;

class AuthController extends Controller
{

    public function showLogin()
    {
        return $this->view('auth.login');
    }
    public function login()
    {
        $modelUsuario = new Usuario();
        $data = $_POST;


        $usuario = $modelUsuario->where('Login', '=' , $data['Login'])
            ->where('Password', '=', $data['Password'])
            ->first();

        if ($usuario) 
        {
            session_start();
            $_SESSION['Nombre'] = $usuario['Nombre'];
            $_SESSION['Login'] = $usuario['Login'];
            $_SESSION['Tipo'] = $usuario['Tipo'];  
            return $this->redirect('/home');

        }
        else
        {
            return $this->redirect('/login');
        }

    }
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        return $this->redirect('/login');
    }
}

