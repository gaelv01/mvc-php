<?php

use lib\Route;
use App\Controllers\MateriaController;
use App\Models\Materia;

Route::get('/materias', [MateriaController::class, 'index']);
Route::get('/materias/create', [MateriaController::class, 'create']);
Route::post('/materias', [MateriaController::class, 'store']);
Route::get('/materias/:id', [MateriaController::class, 'show']);
Route::get('/materias/:id/edit', [MateriaController::class, 'edit']);
Route::post('/materias/:id',[MateriaController::class,'update']);
Route::post('/materias/:id/delete', [MateriaController::class, 'destroy']); 