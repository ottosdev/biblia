<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\VersiculoController;
use \App\Http\Controllers\LivroController;
use \App\Http\Controllers\FavoritoController;
use \App\Http\Controllers\CapituloController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResources([
    'versiculo' => VersiculoController::class,
    'livro' => LivroController::class,
    'capitulo' => CapituloController::class,
    'favoritos' => FavoritoController::class
]);
