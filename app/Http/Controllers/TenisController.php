<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Torneo;
use App\Services\Partido;

class TenisController extends Controller
{
    public function index(Request $request){
        $jugadores = $this->listarJugadores($request);
        $resultado = new Torneo($jugadores,$partido);
        return $resultado;
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
