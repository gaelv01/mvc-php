<?php

use Lib\Route;
use App\Controllers\GrupoController;

Route::get('/grupos', [GrupoController::class, 'index']);
Route::get('/grupos/create', [GrupoController::class, 'create']);
Route::post('/grupos', [GrupoController::class, 'store']);
Route::get('/grupos/:id', [GrupoController::class, 'show']);
Route::get('/grupos/:id/edit', [GrupoController::class, 'edit']);
Route::post('/grupos/:id', [GrupoController::class, 'update']);
Route::post('/grupos/:id/delete', [GrupoController::class, 'destroy']);

?>

