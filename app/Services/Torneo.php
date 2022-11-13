<?php
namespace App\Services;
use App\Services\Partido;

class Torneo
{
    public $jugadores;

    public function __construct($jugadores){
        $this->jugadores = $jugadores;
        $encuentros = $this->generarEncuentros($jugadores);
    }

    public function generarEncuentros($jugadores){
        shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        foreach($encuentros as $encuentro){
            $jugador1 = $encuentro[0];
            $jugador2 = $encuentro[1];
            $this->competir($jugador1,$jugador2);
        }
    }

    public function competir($jugador1,$jugador2){
        
    }
}