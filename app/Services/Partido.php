<?php
namespace App\Services;
use App\Services\Abstracts\Jugador;
use App\Partido as PartidoModel;
use App\Torneo;
use App\Services\Habilidad;

class Partido
{
    public function competir(array $participantes,Torneo $torneo,int $ronda):Jugador{
        $participantes[0]->asignarPuntuacion(0);
        $participantes[1]->asignarPuntuacion(0);
        $habilidades = $participantes[0]->obtenerHabilidades();

        foreach($habilidades as $nombre_habilidad => $atributos_habilidad){
            $roll = $this->rollHabilidades($participantes,$nombre_habilidad);
            $this->asignarPuntuacionParticipante($roll,$participantes,$atributos_habilidad);
        }

        $partida = $this->guardarPartida($torneo->id,$participantes,$ronda);
        $punt_total_jugador1 = $participantes[0]->obtenerPuntuacion();
        $punt_total_jugador2 = $participantes[1]->obtenerPuntuacion();

        if($punt_total_jugador1 > $punt_total_jugador2){
            $ganador = $participantes[0];
        }else if($punt_total_jugador1 < $punt_total_jugador2){
            $ganador = $participantes[1];
        }else{
            $ganador = $this->desempate($participantes,$partida);
        }

        return $ganador;
    }

    protected function guardarPartida(int $id_torneo,array $participantes,int $ronda): PartidoModel{
        return PartidoModel::create([
            'id_torneo'            => $id_torneo,
            'id_jugador_1'         => $participantes[0]->obtenerId(),
            'id_jugador_2'         => $participantes[1]->obtenerId(),
            'ronda'                => $ronda,
            'puntuacion_jugador_1' => $participantes[0]->obtenerPuntuacion(),
            'puntuacion_jugador_2' => $participantes[1]->obtenerPuntuacion()
        ]);
    }

    protected function rollHabilidades(array $participantes,string $nombre_habilidad):int{
        $roll = [];
        foreach($participantes as $participante){
            $valor_habilidad_participante = $participante->obtenerHabilidades()[$nombre_habilidad]->valor;
            $roll[] = rand(1,20) + $valor_habilidad_participante;
        }
        return array_search(max($roll), $roll);
    }

    protected function asignarPuntuacionParticipante(
        int $roll,array $participantes,Habilidad $atributos_habilidad
    ):void{
        $indice_participante = $roll == 1 ? 1 : 0;
        $participantes[$indice_participante]->asignarPuntuacion(
            $atributos_habilidad->ponderacion + $participantes[$indice_participante]->obtenerPuntuacion() 
        );
    }

    protected function desempate(array $participantes,PartidoModel $partida):Jugador{
        if(rand(1,10) <= 5){
            $partida->update([
                'puntuacion_jugador_1' => $partida->puntuacion_jugador_1 + 1
            ]);
            $ganador = $participantes[0];
        }else{
            $partida->update([
                'puntuacion_jugador_2' => $partida->puntuacion_jugador_2 + 1
            ]);
            $ganador = $participantes[1];
        }
        return $ganador; 
    }
}