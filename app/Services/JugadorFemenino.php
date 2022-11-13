<?php
namespace App\Services;
use App\Services\Interfaces\Jugador;

class JugadorFemenino implements Jugador
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

    public function nombreCompleto():string{
        return "{$this->primerNombre} {$this->segundoNombre}";
    }

    public function obtenerHabilidades():array{
        return [
            $this->habilidad,
            $this->tiempo_reaccion
        ];
    }
}