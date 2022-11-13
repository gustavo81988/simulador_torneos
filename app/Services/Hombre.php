<?php
namespace App\Services;
use App\Services\Jugador;

class Hombre implements Jugador
{
    public $primerNombre ;
    public $segundoNombre;
    public $habilidad;
    public $fuerza;
    public $velocidad;

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

    public function nombreCompleto(){
        return "{$this->primerNombre} {$this->segundoNombre}";
    }

    public function estadisticas(){
        return [
            $this->habilidad,
            $this->fuerza,
            $this->velocidad
        ];
    }
}