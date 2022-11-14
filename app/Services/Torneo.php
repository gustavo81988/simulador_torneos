<?php
namespace App\Services;
use App\Services\Partido;

class Torneo
{
    protected $jugadores;
    protected $partido;

    public function __construct(array $jugadores,Partido $partido){
        $this->jugadores = $jugadores;
        $this->partido   = $partido;
        $finalistas      = $this->eliminatorias($jugadores);
        $ganador         = $this->competir($finalistas[0],$finalistas[1]);
        return $ganador;
    }

    protected function eliminatorias($jugadores){
        shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        $ganadores  = [];
        foreach($encuentros as $encuentro){
            $jugador1    = $encuentro[0];
            $jugador2    = $encuentro[1];
            $ganadores[] = $this->partido->competir($jugador1,$jugador2);
        }
        return count($ganadores) != 2 ? $this->eliminatorias($ganadores): $ganadores;
    }
}