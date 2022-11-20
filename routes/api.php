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

// Torneos
Route::get('torneo/listar','TorneosController@listarTorneos')->name('api.listar_torneos');
Route::get('torneo/detalle','TorneosController@detalleTorneo')->name('api.detalle_torneo');
Route::post('torneo/jugar','TorneosController@jugar')->name('api.torneo_masculino.index');

//Jugadores
Route::get('jugadores/listar','UsuarioController@listarJugadores')->name('api.usuario.listar');
