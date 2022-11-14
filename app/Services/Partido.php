<?php
namespace App\Services;
use App\Services\Interfaces\Jugador;

class Partido
{
    public function competir(Jugador $jugador1,Jugador $jugador2){
        foreach($jugador1->obtenerHabilidades() as $habilidad){
            $roll = $habilidad->valor + rand(1,20);
        }
        $ganador = $jugador1;
        return $ganador;
    }

    protected function obtenerEstadisticas(Jugador $jugador){
        dd($jugador);
    }
}