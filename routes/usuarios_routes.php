<?php

use lib\Route;
use App\Controllers\UsuarioController;

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/create', [UsuarioController::class, 'create']);
Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::get('/usuarios/:id', [UsuarioController::class, 'show']);
Route::get('/usuarios/:id/edit', [UsuarioController::class, 'edit']);
Route::post('/usuarios/:id', [UsuarioController::class, 'update']);
Route::post('/usuarios/:id/delete', [UsuarioController::class, 'destroy']);


