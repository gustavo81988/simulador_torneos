<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TorneosController extends Controller
{
    public function listarTorneos(Request $request)
    {
        $torneo = DB::table('torneos')
            ->select(DB::raw("
                *
            "))
            ->join('usuarios',function($join){
                $join->on('usuarios.id','=','torneos.id_usuario_ganador');
            })
        ;
        return response()->json($torneo);
    }
}
