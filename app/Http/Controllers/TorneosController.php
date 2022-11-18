<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Torneo as ModelTorneo;
use App\Services\TorneoEliminatorio;
use App\Services\JugadorMasculino;
use App\Services\Partido;
use App\Services\Habilidad;
use App\Http\Requests\Torneo\ListarTorneosRequest;
use App\Http\Requests\Torneo\DetalleTorneoRequest;

class TorneosController extends Controller
{
    public function torneoMasculino(
        Request $request,Usuario $usuario,Partido $partido,TorneoEliminatorio $torneo
    ){
        $jugadores    = $usuario->jugadoresMasculinos(Usuario::whereIn('id',$request->jugadores)->get());
        $model_torneo = ModelTorneo::create(['nombre'=> $request->nombre_torneo,'genero'=> $request->genero]);

        return $torneo->obtenerGanador(
            $model_torneo,$jugadores,$partido
        )->nombreCompleto();
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
