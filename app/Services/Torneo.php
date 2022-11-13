<?php
namespace App\Services;

class Torneo
{
    public $jugadores;
    public $partido;

    public function __construct($jugadores,$partido){
        $this->jugadores = $jugadores;
        $this->partido   = $partido;
    }

    public function generarEncuentros($jugadores){
        shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        return $encuentros;
    }

    public function rondaEliminatoria($encuentros){
        foreach($encuentros as $encuentro){
            $jugador1 = $encuentro[0];
            $jugador2 = $encuentro[1];
            $this->competir($jugador1,$jugador2);
        }
    }
}