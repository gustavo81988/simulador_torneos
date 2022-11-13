<?php
namespace App\Services;

class Partido
{
    public $jugador1;
    public $jugador2;

    public function __construct($jugador1,$jugador2){
        $this->$jugador1 = $jugador1;
        $this->$jugador2 = $jugador2;
    }

    public function competir($jugador1,$jugador2){
        $ganador = $jugador1;
        return $ganador;
    }

    public function obtenerEstadisticas(){

    }
}