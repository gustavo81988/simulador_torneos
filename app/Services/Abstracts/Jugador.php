<?php
namespace App\Services;

abstract class Jugador 
{
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