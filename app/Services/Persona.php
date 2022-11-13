<?php
namespace App\Services;

class Persona
{
    public $primerNombre ;
    public $segundoNombre;
    public $habilidad;
    
    public function __construct(
        $primerNombre, $segundoNombre, $habilidad
    )
    {
        $this->primerNombre  = $primerNombre;
        $this->segundoNombre = $segundoNombre;
        $this->habilidad     = $habilidad;
    }

    public function nombreCompleto()
    {
        return "{$this->primerNombre} {$this->segundoNombre}";
    }
}