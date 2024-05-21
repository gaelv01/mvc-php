<?php

/**
 * Esta clase es la base de la cual heredarán todos los controladores
 * 
 */

namespace App\Controllers;

class Controller 
{
    /**
     * Este metodo se encarga de renderizar las vistas
     * 
     * @param string $route La ruta de la vista a renderizar
     * @param array $data Los datos a pasar a la vista
     * @return string La vista renderizada
     */

    public function view($route, $data = [])
    {
        // Desestructurar los datos
        extract($data);

        // Reemplazar los puntos por barras diagonales
        $route = str_replace('.', '/', $route);
        // Verificar si existe el archivo de la vista
        if(file_exists("../resources/views/$route.php"))
        {
            // Iniciar el almacenamiento en buffer
            ob_start();
            // Incluir el archivo de la vista
            include "../resources/views/$route.php";
            // Obtener el contenido del buffer
            $content = ob_get_clean();
            // Devolver el contenido de la vista
            return $content;
        }
        else
        {
            // Devolver un mensaje de error
            return "No se encontró la vista";
        }
    }

    public function redirect($route)
    {
        header("Location: $route");
    }
}
