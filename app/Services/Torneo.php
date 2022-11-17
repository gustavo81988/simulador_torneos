<?php
namespace App\Services;
use App\Services\Partido;
use App\Torneo as ModelTorneo;

class Torneo
{
    public function obtenerGanador(string $nombre,array $jugadores,Partido $partido){
        $torneo     = $this->crearTorneo($nombre);
        $finalistas = $this->eliminatorias($jugadores,$partido);
        return $partido->competir($finalistas);
    }

    public function crearTorneo(string $nombre){
        return ModelTorneo::create(['nombre'=> $nombre]);
    }

    protected function eliminatorias(array $jugadores,Partido $partido):array{
        // shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        $ganadores  = [];
        foreach($encuentros as $participantes){
            $ganadores[] = $partido->competir($participantes);
        }
        return count($ganadores) != 2 ? 
            $this->eliminatorias($ganadores,$partido) : $ganadores;
    }
}