<?php

use Lib\Route;  
use App\Controllers\AlumnoController;

Route::get('/alumnos', [AlumnoController::class, 'index']);
Route::get('/alumnos/create', [AlumnoController::class, 'create']);
Route::post('/alumnos', [AlumnoController::class, 'store']);
Route::get('/alumnos/:id', [AlumnoController::class, 'show']);
Route::get('/alumnos/:id/edit', [AlumnoController::class, 'edit']);
Route::post('/alumnos/:id', [AlumnoController::class, 'update']);
Route::post('/alumnos/:id/delete', [AlumnoController::class, 'destroy']);
