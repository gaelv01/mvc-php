<?php

use Lib\Route;

use App\Controllers\HomeController;
use App\Controllers\AlumnoController;

Route::get('/', [HomeController::class, 'index']);

include 'alumnos_routes.php';
include 'administradores_routes.php';

Route::dispatch();
