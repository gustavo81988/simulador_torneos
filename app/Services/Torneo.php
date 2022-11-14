<?php
namespace App\Services;
use App\Services\Partido;

class Torneo
{
    protected $jugadores;

    public function __construct(array $jugadores,Partido $partido){
        $this->jugadores = $jugadores;
        $finalistas      = $this->eliminatorias($jugadores,$partido);
        $ganador         = $partido->competir($finalistas[0],$finalistas[1]);
        return $ganador;
    }

    protected function eliminatorias(array $jugadores,Partido $partido){
        shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        $ganadores  = [];
        foreach($encuentros as $jugadores){
            $ganadores[] = $partido->competir($jugadores[0],$jugadores[1]);
        }
        return count($ganadores) != 2 ? $this->eliminatorias($ganadores) : $ganadores;
    }
}