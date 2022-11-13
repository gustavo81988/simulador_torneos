<?php
namespace App\Services;

class Mujer extends Persona
{
    public $primerNombre ;
    public $segundoNombre;
    public $habilidad;
    public $tiempo_reaccion;

    public function __construct(
        $primerNombre,$segundoNombre,$habilidad,
        $tiempo_reaccion
    ){
        $this->primerNombre    = $primerNombre;
        $this->segundoNombre   = $segundoNombre;
        $this->habilidad       = $habilidad;
        $this->tiempo_reaccion = $tiempo_reaccion;
    }

    public function nombreCompleto(){
        return "{$this->primerNombre} {$this->segundoNombre}";
    }

    public function obtenerHabilidades(){
        return [
            $this->habilidad,
            $this->tiempo_reaccion
        ];
    }
}