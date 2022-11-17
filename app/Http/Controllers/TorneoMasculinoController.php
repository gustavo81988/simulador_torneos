<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Torneo;
use App\Services\JugadorMasculino;
use App\Services\Partido;
use App\Services\Habilidad;
use App\Usuario;

class TorneoMasculinoController extends Controller
{
    public function index(Request $request,Partido $partido,Torneo $torneo){
        $jugadores = $this->listarJugadores(Usuario::whereIn('id',$request->jugadores)->get());
        return $torneo->obtenerGanador($request->nombre_torneo,$jugadores,$partido)
            ->nombreCompleto()
        ;
    }

    public function listarJugadores($usuarios){
        $jugadores = [];
        foreach($usuarios as $jugador){
            $jugadores[] = new JugadorMasculino(
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
