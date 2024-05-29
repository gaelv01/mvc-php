<?php

use App\Controllers\CalificacionController;
use lib\Route;

Route::get('/calificaciones', [CalificacionController::class, 'index']);