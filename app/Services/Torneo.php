<?php
namespace App\Services;
use App\Services\Partido;

class Torneo
{
    public function obtenerGanador(array $jugadores,Partido $partido){
        $finalistas      = $this->eliminatorias($jugadores,$partido);
        return $partido->competir($finalistas[0],$finalistas[1]);
    }

    protected function eliminatorias(array $jugadores,Partido $partido){
        shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        $ganadores  = [];
        foreach($encuentros as $jugadores){
            $ganadores[] = $partido->competir($jugadores[0],$jugadores[1]);
        }
        return count($ganadores) != 2 ? 
            $this->eliminatorias($ganadores,$partido) : $ganadores;
    }
}