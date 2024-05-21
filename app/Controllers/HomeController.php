<?php

/**
 * Este es el controlador de la pagina de inicio
 * 
 */

namespace App\Controllers;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Este metodo se encarga de renderizar la vista de la pagina de inicio
     * 
     * @return string La vista renderizada
     */
    public function index()
    {
        # Creamos un nuevo objeto de la clase Contact
        $contactModel = new Contact();
        $contactModel->delete(1004);
        return "eliminado";




                // return $this->view('home', [
        //     'title' => 'Inicio',
        //     'description' => 'Esta es la pagina de inicio'
        // ]);
    }


}

