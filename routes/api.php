<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\VersiculoController;
use \App\Http\Controllers\LivroController;
use \App\Http\Controllers\FavoritoController;
use \App\Http\Controllers\CapituloController;
use \App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'cadastroUsuario']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' =>  ['auth:sanctum']], function () {
    Route::apiResources([
        'versiculo' => VersiculoController::class,
        'livro' => LivroController::class,
        'capitulo' => CapituloController::class,
        'favoritos' => FavoritoController::class
    ]);
});

