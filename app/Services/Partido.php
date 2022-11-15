<?php
namespace App\Services;
use App\Services\Abstracts\Jugador;

class Partido
{
    public function competir($participantes){
        $habilidades = array_keys($participantes[0]->obtenerHabilidades());
        foreach($habilidades as $nombre_habilidad){
            foreach($participantes as $participante){
                $habilidad = $participante->obtenerHabilidades()[$nombre_habilidad];
                $roll      = rand(1,20) + $habilidad->valor;
            }
        }
        return $ganador;
    }
}