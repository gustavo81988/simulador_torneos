<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Jugador;
use App\Services\JugadorMasculino;
use App\Services\Torneo;
use App\Services\Partido;

class TenisController extends Controller
{
    public function index(Request $request){
        $jugadores  = $this->jugadores($request);
        $encuentros = $this->generarEncuentros($jugadores);
        $this->rondaEliminatoria($encuentros);
    }

    public function jugadores(Request $request){
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

    public function competir($jugador1, $jugador2){
        dd($jugador1);
    }

    public function rollStat(Persona $jugador){

    }
}
