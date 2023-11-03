<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\ArtigoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('artigos', 'App\Http\Controllers\ArtigoController@index'); //Target class => App\Http\Controllers\ArtigoController
Route::get('artigo/{id}', 'App\Http\Controllers\ArtigoController@show');
Route::post('artigo', 'App\Http\Controllers\ArtigoController@store');
Route::put('artigo/{id}', 'App\Http\Controllers\ArtigoController@update');
Route::delete('artigo/{id}', 'App\Http\Controllers\ArtigoController@destroy');
