<?php

# web.php es un script que guarda todas las rutas web de esta aplicacion.
# Aqui se definen las rutas de la aplicacion, y se asignan 
# las funciones que se ejecutan cuando se accede a ellas.

# Usamos un namespace (definido en Route.php) para segmentar esta libreria
# de otras librerias que podriamos tener en el mismo directorio.
use Lib\Route;

# Estas son las rutas.
# Observa como se ejecutan.

Route::get('/', function (){
    echo 'Pagina inicial';
});

Route::get('/contact', function () {
    echo 'Contacto';
});

Route::get('/about', function () {
    echo 'Acerca de';
});


Route::get('/courses/:slug', function(){
    echo "Cursos";
});

# Esta funcion de aqui es para ejecutar las funciones que estan escritas anteriormente.
# Puedes consultar el uso de dispatch en lib/Route.php
Route::dispatch();

# Accedemos a Route.
# Accedemos al metodo GET.
# Le pasamos la ruta '/' y le pasamos una funcion para que se ejecute algo.
# Y aqui podemos definir tantas rutas como queramos.
