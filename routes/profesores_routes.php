<?php


use App\Controllers\ProfesorController;
use lib\Route;

Route::get('/profesores', [ProfesorController::class, 'index']);
Route::get('/profesores/create', [ProfesorController::class, 'create']);
Route::post('/profesores', [ProfesorController::class, 'store']);
Route::get('/profesores/:id', [ProfesorController::class, 'show']);
Route::get('/profesores/:id/edit', [ProfesorController::class, 'edit']);
Route::post('/profesores/:id', [ProfesorController::class, 'update']);
Route::post('/profesores/:id/delete', [ProfesorController::class, 'destroy']);

