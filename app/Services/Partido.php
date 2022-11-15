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
                $roll[]    = rand(1,20) + $habilidad->valor;
            }
            $roll_ganador = array_search(max($roll), $roll);
            if($roll_ganador){
                $participantes[0]->asignarPuntuacion(
                    $habilidad->ponderacion + $participantes[0]->obtenerPuntuacion()
                );
            }else{
                $participantes[1]->asignarPuntuacion(
                    $habilidad->ponderacion + $participantes[1]->obtenerPuntuacion() 
                );
            }
        }
        dd(
            $participantes[0]->obtenerPuntuacion(),
            $participantes[1]->obtenerPuntuacion()
        );
        return $ganador;
    }
}