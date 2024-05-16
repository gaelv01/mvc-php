<?php

# Autocargador de php.
# Que es esto? 
# Es un script que permite automatizar el tener que llamar 
# require_once por aqui, o por alla.
# Este es usado para el enrutamiento.
# Te recomiendo que no le prestes mucha atencion, es simplemente para
# automatizar el require_once de las rutas.

spl_autoload_register(function($clase){
    $ruta = '../' . str_replace("\\", "/" , $clase) . ".php";
    if(file_exists($ruta))
        require_once $ruta;
    else
        die("No se pudo cargar la clase $clase");
});
