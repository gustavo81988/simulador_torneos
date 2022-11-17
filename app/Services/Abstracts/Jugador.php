<?php
namespace App\Services\Abstracts;

abstract class Jugador 
{
    public function nombreCompleto():string{
        return "{$this->nombre} {$this->apellido}";
    }

    public function obtenerPuntuacion(){
        return $this->puntuacion;
    }

    public function asignarPuntuacion(int $puntuacion){
        $this->puntuacion = $puntuacion;
    }

    abstract public function obtenerHabilidades():array;
}