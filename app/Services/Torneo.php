<?php
namespace App\Services;
use App\Services\Partido;
use App\Torneo as ModelTorneo;
use App\Services\Abstracts\Jugador;

class Torneo
{
    public function obtenerGanador(string $nombre,array $jugadores,Partido $partido):Jugador{
        $torneo  = $this->crearTorneo($nombre);
        $ganador = $this->eliminatorias($jugadores,$partido,$torneo);
        return $ganador;
    }

    public function crearTorneo(string $nombre):string{
        return ModelTorneo::create(['nombre'=> $nombre]);
    }

    protected function eliminatorias(
        array $jugadores,Partido $partido,ModelTorneo $torneo,$ronda = 1
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