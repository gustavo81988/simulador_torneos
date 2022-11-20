<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario as ModelUsuario;
use Carbon\Carbon;

class UsuarioController extends Controller
{
    public function listarJugadores(Request $request,ModelUsuario $modelUsuario){
        return response()->json($modelUsuario->listarJugadores($request));
    }
}
