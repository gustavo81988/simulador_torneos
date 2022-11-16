<?php
namespace App\Services;
use App\Services\Abstracts\Jugador;
use Illuminate\Support\Arr;

class Partido
{
    public function competir($participantes){
        $participantes[0]->asignarPuntuacion(0);
        $participantes[1]->asignarPuntuacion(0);
        $habilidades = $participantes[0]->obtenerHabilidades();

        foreach($habilidades as $nombre_habilidad => $atributos_habilidad){
            $roll = [];
            foreach($participantes as $participante){
                $habilidad_participante = $participante->obtenerHabilidades()[$nombre_habilidad];
                $roll[]    = rand(1,20) + $habilidad_participante->valor;
            }

            $roll_ganador = array_search(max($roll), $roll);

            if($roll_ganador == 1){
                $participantes[1]->asignarPuntuacion(
                    $atributos_habilidad->ponderacion + $participantes[1]->obtenerPuntuacion() 
                );
            }else{
                $participantes[0]->asignarPuntuacion(
                    $atributos_habilidad->ponderacion + $participantes[0]->obtenerPuntuacion()
                );
            }
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

    protected function rollHabilidad($participantes,$nombre_habilidad){
        
    }

    protected function desempate($participantes){
        return rand(1,10) <= 5 ? $participantes[0] : $participantes[1];
    }
}