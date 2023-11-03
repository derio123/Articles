<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('api/artigos', [ArtigoController::class, 'index']);
Route::get('api/artigo/{id}', [ArtigoController::class, 'show']);
Route::post('api/artigo', [ArtigoController::class, 'store']);
Route::put('api/artigo/{id}', [ArtigoController::class, 'update']);
Route::delete('api/artigo/{id}', [ArtigoController::class, 'destroy']); */