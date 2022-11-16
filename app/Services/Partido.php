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
            $roll = $this->rollHabilidades($participantes,$nombre_habilidad);
            $this->asignarPuntuacionParticipante($roll,$participantes,$atributos_habilidad);
        }

        $punt_total_jugador1 = $participantes[0]->obtenerPuntuacion();
        $punt_total_jugador2 = $participantes[1]->obtenerPuntuacion();

        if($punt_total_jugador1 > $punt_total_jugador2){
            $ganador = $participantes[0];
        }else if($punt_total_jugador1 < $punt_total_jugador2){
            $ganador = $participantes[1];
        }else{
            $ganador = $this->desempate($participantes);
        }

        return $ganador;
    }

    protected function rollHabilidades($participantes,$nombre_habilidad){
        $roll = [];
        foreach($participantes as $participante){
            $valor_habilidad_participante = $participante->obtenerHabilidades()[$nombre_habilidad]->valor;
            $roll[] = rand(1,20) + $valor_habilidad_participante;
        }
        return array_search(max($roll), $roll);
    }

    protected function asignarPuntuacionParticipante($roll,$participantes,$atributos_habilidad){
        $indice_participante = $roll == 1 ? 1 : 0;
        $participantes[$indice_participante]->asignarPuntuacion(
            $atributos_habilidad->ponderacion + $participantes[$indice_participante]->obtenerPuntuacion() 
        );
    }

    protected function desempate($participantes){
        return rand(1,10) <= 5 ? $participantes[0] : $participantes[1];
    }
}