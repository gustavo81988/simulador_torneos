<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Torneo\ListarTorneosRequest;
use App\Http\Requests\Torneo\DetalleTorneoRequest;
use App\Http\Requests\Torneo\JugarTorneoRequest;

use App\Usuario;
use App\Torneo as ModelTorneo;
use App\Services\TorneoEliminatorio;
use App\Services\Partido;

class TorneosController extends Controller
{
    public function jugar(
        JugarTorneoRequest $request,Usuario $usuario,Partido $partido,TorneoEliminatorio $torneo
    ){
        $usuarios     = Usuario::whereIn('id',$request->jugadores)->get();
        $model_torneo = ModelTorneo::create(['nombre'=> $request->nombre_torneo,'genero'=> $request->genero]);

        if($request->genero == 'M'){
            $jugadores = $usuario->jugadoresMasculinos($usuarios);
        }else{
            $jugadores = $usuario->jugadoresFemeninos($usuarios);
        }

        $ganador = $torneo->obtenerGanador($model_torneo,$jugadores,$partido);
        return  response()->json(['ganador' => $ganador->nombreCompleto()]);
    }

    public function listarTorneos(ListarTorneosRequest $request,ModelTorneo $modelTorneo)
    {
        return response()->json($modelTorneo->listarTorneos($request));
    }

    public function detalleTorneo(DetalleTorneoRequest $request,ModelTorneo $modelTorneo)
    {
        return response()->json($modelTorneo->detalleTorneo($request));
    }
}
