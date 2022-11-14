<?php
namespace App\Services;
use App\Services\Abstracts\Jugador;

class Partido
{
    public function competir(Jugador $jugador1,Jugador $jugador2){
        dd($jugador1);
        $this->roll($jugador1);
        $this->roll($jugador2);
        $ganador = $jugador1;
        return $ganador;
    }

    protected function roll(Jugador $jugador){
        foreach($jugador->obtenerHabilidades() as $habilidad){
            $roll[$habilidad->nombre] = [
                'roll'        => $habilidad->valor + rand(1,20),
                'ponderacion' => $habilidad->ponderacion
            ];
        }
        return $roll;
    }
}