<?php
namespace App\Services;
use App\Services\Interfaces\Jugador;
use App\Services\Habilidad;

class JugadorMasculino implements Jugador
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

    public function nombreCompleto():string{
        return "{$this->primerNombre} {$this->segundoNombre}";
    }

    public function obtenerHabilidades():array{
        return [
            new Habilidad('Habilidad',$this->habilidad,2),
            new Habilidad('Fuerza',$this->fuerza,1),
            new Habilidad('Velocidad',$this->velocidad,1)
        ];
    }
}