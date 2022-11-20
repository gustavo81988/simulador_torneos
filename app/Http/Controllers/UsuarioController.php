<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Usuarios\ListarJugadoresRequest;
use App\Usuario as ModelUsuario;
use Carbon\Carbon;

class UsuarioController extends Controller
{
    public function listarJugadores(ListarJugadoresRequest $request,ModelUsuario $modelUsuario){
        return response()->json($modelUsuario->listarJugadores($request));
    }
}
