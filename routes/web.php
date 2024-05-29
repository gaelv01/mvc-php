<?php

use Lib\Route;

use App\Controllers\HomeController;


Route::get('/', [HomeController::class, 'auth']);
Route::get('/home', [HomeController::class, 'index']);

include 'alumnos_routes.php';
include 'administradores_routes.php';
include 'materias_routes.php';
include 'profesores_routes.php';
include 'usuarios_routes.php';
include 'grupos_routes.php';
include 'calificaciones_routes.php';
include 'auth_routes.php';

Route::dispatch();
