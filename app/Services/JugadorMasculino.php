<?php
namespace App\Services;
use App\Services\Abstracts\Jugador;

class JugadorMasculino extends Jugador
{
    protected $primerNombre ;
    protected $segundoNombre;
    protected $habilidad;
    protected $puntuacion = 0;
    protected $fuerza;
    protected $velocidad;

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

    public function obtenerHabilidades():array{
        return[
            $this->habilidad->nombre => $this->habilidad,
            $this->fuerza->nombre    => $this->fuerza,
            $this->velocidad->nombre => $this->velocidad
        ];
    }
}