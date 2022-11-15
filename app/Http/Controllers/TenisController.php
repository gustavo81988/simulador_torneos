<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Torneo;
use App\Services\JugadorMasculino;
use App\Services\Partido;
use App\Services\Habilidad;

class TenisController extends Controller
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
            $jugadores[] = new JugadorMasculino(
                $jugador['primer_nombre'],
                $jugador['segundo_nombre'],
                new Habilidad('Habilidad',$jugador['habilidad'],1),
                new Habilidad('Fuerza',$jugador['fuerza'],1),
                new Habilidad('Velocidad',$jugador['velocidad'],1)
            );
        }
        return $jugadores;
    }
}
