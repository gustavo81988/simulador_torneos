<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Torneo;
use App\Services\JugadorMasculino;
use App\Services\Partido;

class TenisController extends Controller
{
    public function index(Request $request,Partido $partido,Torneo $torneo){
        $jugadores = $this->listarJugadores($request);
        return $torneo->obtenerGanador($jugadores,$partido);
    }

    public function listarJugadores(Request $request){
        $jugadores = [];
        foreach($request->all() as $jugador){
            $jugadores[] = new JugadorMasculino(
                $jugador['primer_nombre'],
                $jugador['segundo_nombre'],
                $jugador['habilidad'],
                $jugador['fuerza'],
                $jugador['velocidad']
            );
        }
        return $jugadores;
    }
}
