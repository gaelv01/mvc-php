<?php

use lib\Route;
use App\Controllers\AdministradorController;

Route::get('/admin', [AdministradorController::class, 'index']);
Route::get('/admin/create', [AdministradorController::class, 'create']);
Route::post('/admin', [AdministradorController::class, 'store']);
Route::get('/admin/:id', [AdministradorController::class, 'show']);
Route::get('/admin/:id/edit', [AdministradorController::class, 'edit']);
Route::post('/admin/:id', [AdministradorController::class, 'update']);
Route::post('/admin/:id/delete', [AdministradorController::class, 'destroy']);


