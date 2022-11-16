<?php
namespace App\Services;
use App\Services\Abstracts\Jugador;

class Partido
{
    public function competir($participantes){
        $participantes[0]->asignarPuntuacion(0);
        $participantes[1]->asignarPuntuacion(0);
        $habilidades = array_keys($participantes[0]->obtenerHabilidades());

        foreach($habilidades as $nombre_habilidad){
            $this->asignarPuntuacion($this->rollHabilidad($participantes));
        }

        if($participantes[0]->obtenerPuntuacion() > $participantes[1]->obtenerPuntuacion()){
            $ganador = $participantes[0];
        }else if($participantes[0]->obtenerPuntuacion() < $participantes[1]->obtenerPuntuacion()){
            $ganador = $participantes[1];
        }else{
            $ganador = $this->desempate($participantes);
        }

        return $ganador;
    }

    protected function asignarPuntuacion(){
        if($roll_ganador == 1){
            $participantes[1]->asignarPuntuacion(
                $habilidad->ponderacion + $participantes[1]->obtenerPuntuacion() 
            );
        }else{
            $participantes[0]->asignarPuntuacion(
                $habilidad->ponderacion + $participantes[0]->obtenerPuntuacion()
            );
        }
    }

    protected function rollHabilidad($participantes){
        $roll = [];
        foreach($participantes as $participante){
            $habilidad = $participante->obtenerHabilidades()[$nombre_habilidad];
            $roll[]    = rand(1,20) + $habilidad->valor;
        }
        return array_search(max($roll), $roll);
    }

    protected function desempate($participantes){
        return rand(1,10) <= 5 ? $participantes[0] : $participantes[1];
    }
}