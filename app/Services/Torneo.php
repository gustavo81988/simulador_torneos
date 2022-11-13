<?php
namespace App\Services;

class Torneo
{
    public function __construct(
        $primerNombre, $segundoNombre, $habilidad,
        $fuerza,$velocidad
    ){
        $this->primerNombre  = $primerNombre;
        $this->segundoNombre = $segundoNombre;
        $this->habilidad     = $habilidad;
        $this->fuerza        = $fuerza;
        $this->velocidad     = $velocidad;
    }
    
    public function generarEncuentros($jugadores){
        shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        return $encuentros;
    }
}