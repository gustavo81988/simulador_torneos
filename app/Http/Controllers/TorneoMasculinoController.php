<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\TorneoEliminatorio;
use App\Torneo as ModelTorneo;
use App\Services\JugadorMasculino;
use App\Services\Partido;
use App\Services\Habilidad;
use App\Usuario;

class TorneoMasculinoController extends Controller
{
    public function index(Request $request,Partido $partido,TorneoEliminatorio $torneo){
        $jugadores    = $this->listarJugadores(Usuario::whereIn('id',$request->jugadores)->get());
        $model_torneo = ModelTorneo::create(['nombre'=> $request->nombre_torneo,'genero'=> $request->genero]);

        return $torneo->obtenerGanador(
            $model_torneo,$jugadores,$partido
        )->nombreCompleto();
    }

    public function listarJugadores($usuarios){
        $jugadores = [];
        foreach($usuarios as $jugador){
            $jugadores[] = new JugadorMasculino(
                $jugador['id'],
                $jugador['nombre'],
                $jugador['apellido'],
                new Habilidad('Habilidad',$jugador['habilidad'],3),
                new Habilidad('Fuerza',$jugador['fuerza'],1),
                new Habilidad('Velocidad',$jugador['velocidad'],3)
            );
        }
        return $jugadores;
    }
}
