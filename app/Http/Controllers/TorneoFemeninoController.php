<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Torneo;
use App\Services\JugadorFemenino;
use App\Services\Partido;
use App\Services\Habilidad;

class TorneoFemeninoController extends Controller
{
    public function index(Request $request,Partido $partido,Torneo $torneo){
        $jugadores = $this->listarJugadores($request);
        return $torneo->obtenerGanador($jugadores,$partido)
            ->nombreCompleto()
        ;
    }

    public function listarJugadores(Request $request){
        $jugadores = [];
        foreach($request->all() as $jugador){
            $jugadores[] = new JugadorFemenino(
                $jugador['primer_nombre'],
                $jugador['segundo_nombre'],
                new Habilidad('Habilidad',$jugador['habilidad'],1),
                new Habilidad('Tiempo de Reaccion',$jugador['tiempo_reaccion'],1)
            );
        }
        return $jugadores;
    }
}
