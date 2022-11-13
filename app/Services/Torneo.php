<?php
namespace App\Services;
use App\Services\Partido;

class Torneo
{
    public $jugadores;

    public function __construct($jugadores){
        $this->jugadores = $jugadores;
        $encuentros = $this->generarEncuentros($jugadores);
        dd($encuentros);
    }

    public function generarEncuentros($jugadores){
        shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        $ganadores  = [];
        foreach($encuentros as $encuentro){
            $jugador1 = $encuentro[0];
            $jugador2 = $encuentro[1];
            $ganadores[] = $this->competir($jugador1,$jugador2);
        }

        if(count($ganadores) != 2){
            return $this->generarEncuentros($ganadores);
        }else{
            dd($ganadores);
            return $ganadores;
        }
    }

    public function competir($jugador1,$jugador2){
        $ganador = $jugador1;
        return $ganador;
    }
}