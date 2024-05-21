<?php

# web.php es un script que guarda todas las rutas web de esta aplicacion.
# Aqui se definen las rutas de la aplicacion, y se asignan 
# las funciones que se ejecutan cuando se accede a ellas.

# Usamos un namespace (definido en Route.php) para segmentar esta libreria
# de otras librerias que podriamos tener en el mismo directorio.
use Lib\Route;

# Importar controladores
use App\Controllers\HomeController;
use App\Controllers\AlumnoController;

# Estas son las rutas.
# Observa como se ejecutan.

Route::get('/', [AlumnoController::class, 'index']);

Route::get('/contact', function () {
    return 'Contacto';
});

Route::get('/about', function () {
    return 'Acerca de';
});

Route::get('/courses/:slug', function($slug){
    return "El curso es: ". $slug;
});

# Es importante mencionar que las rutas deben de seguir un orden.
# Si alguna de las rutas deinidas no se ejecuta, debes de revisar
# el orden.

# Esta funcion de aqui es para ejecutar las funciones que estan escritas anteriormente.
# Puedes consultar el uso de dispatch en lib/Route.php
Route::dispatch();

# Accedemos a Route.
# Accedemos al metodo GET.
# Le pasamos la ruta '/' y le pasamos una funcion para que se ejecute algo,
# con los parametros escritos.
# Y aqui podemos definir tantas rutas como queramos.
