<?php
namespace App\Services;

abstract class Jugador 
{
    abstract protected $primerNombre ;
    abstract protected $segundoNombre;
    abstract protected $habilidad;
    abstract protected $puntuacion;


    public function __construct(
        $primerNombre, $segundoNombre, $habilidad
    ){
        $this->primerNombre  = $primerNombre;
        $this->segundoNombre = $segundoNombre;
        $this->habilidad     = $habilidad;
    }

    public function nombreCompleto():string{
        return "{$this->primerNombre} {$this->segundoNombre}";
    }

    public function obtenerPuntuacion(){
        return $this->puntuacion;
    }

    public function asignarPuntuacion(int $puntuacion):int{
        $this->puntuacion = $puntuacion;
    }

    abstract public function obtenerHabilidades():array;
}