<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('torneo_masculino','TorneoMasculinoController@index')->name('api.torneo_masculino.index');
Route::post('torneo_femenino','TorneoFemeninoController@index')->name('api.torneo_femenino.index');

Route::get('listar_torneos','TorneosController@index')->name('index');

Route::post('usuario/guardar','UsuarioController@guardar')->name('api.usuario.guardar');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
