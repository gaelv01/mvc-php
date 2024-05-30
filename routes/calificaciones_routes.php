<?php

use App\Controllers\CalificacionController;
use lib\Route;

Route::get('/calificaciones', [CalificacionController::class, 'index']);
Route::get('/calificaciones/:id/create', [CalificacionController::class, 'create']);
Route::post('/calificaciones/:id/store', [CalificacionController::class, 'store']);
Route::get('/calificaciones/:id', [CalificacionController::class, 'show']);
Route::get('/calificaciones/:id/edit/:idCal', [CalificacionController::class, 'edit']); 
Route::post('/calificaciones/:id/edit/:idCal', [CalificacionController::class, 'update']);   
Route::post('/calificaciones/:id/delete/:idCal', [CalificacionController::class, 'destroy']);

