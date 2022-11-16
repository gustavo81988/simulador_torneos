<?php
namespace App\Services;
use App\Services\Partido;

class Torneo
{
    public function obtenerGanador(array $jugadores,Partido $partido){
        $finalistas = $this->eliminatorias($jugadores,$partido);
        return $partido->competir($finalistas);
    }

    protected function eliminatorias(array $jugadores,Partido $partido):array{
        shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        $ganadores  = [];
        foreach($encuentros as $paraticipantes){
            $ganadores[] = $partido->competir($paraticipantes);
        }
        return count($ganadores) != 2 ? 
            $this->eliminatorias($ganadores,$partido) : $ganadores;
    }
}