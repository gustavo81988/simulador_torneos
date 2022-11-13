<?php
namespace App\Services;

class Torneo
{
    public function __construct(){
        $jugadores
    }

    public function generarEncuentros($jugadores){
        shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        return $encuentros;
    }
}