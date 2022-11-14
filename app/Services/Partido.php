<?php
namespace App\Services;
use App\Services\Interfaces\Jugador;

class Partido
{
    public function competir(Jugador $jugador1,Jugador $jugador2){
        dd($jugador1->obtenerHabilidades());
        $this->obtenerEstadisticas();
        $ganador = $jugador1;
        return $ganador;
    }

    protected function obtenerEstadisticas(Jugador $jugador){
        dd($jugador);
    }
}