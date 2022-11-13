<?php
namespace App\Services;

class Hombre extends Persona
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

    public function obtenerHabilidades(){
        return [
            $this->habilidad,
            $this->fuerza,
            $this->velocidad
        ];
    }
}