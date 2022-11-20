<?php
namespace App\Services;
use App\Services\Partido;
use App\Services\Abstracts\Jugador;
use App\Torneo;

class TorneoEliminatorio
{
    public function obtenerGanador(Torneo $torneo,array $jugadores,Partido $partido):Jugador{
        $ganador = $this->eliminatorias($jugadores,$partido,$torneo);
        $this->guardarGanador($ganador,$torneo);
        return $ganador;
    }

    protected function eliminatorias(
        array $jugadores,Partido $partido,Torneo $torneo,int $ronda = 1
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

    protected function guardarGanador(Jugador $ganador,Torneo $torneo):void{
        $torneo->update([
            'id_usuario_ganador' => $ganador->obtenerId()
        ]);
    }
}