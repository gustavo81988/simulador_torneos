<?php
namespace App\Services;
use App\Services\Partido;
use App\Services\Abstracts\Jugador;

class TorneoEliminatorio
{
    public function obtenerGanador($torneo,array $jugadores,Partido $partido):Jugador{
        $ganador = $this->eliminatorias($jugadores,$partido,$torneo);
        return $ganador;
    }

    protected function eliminatorias(
        array $jugadores,Partido $partido,$torneo,$ronda = 1
    ):Jugador{
        shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        $ganadores  = [];
        foreach($encuentros as $participantes){
            $ganadores[] = $partido->competir($participantes,$torneo,$ronda);
        }
        $ronda++;
        return count($ganadores) != 2 ? 
            $this->eliminatorias($ganadores,$partido,$torneo,$ronda) :
            $partido->competir($ganadores,$torneo,$ronda);
    }
}