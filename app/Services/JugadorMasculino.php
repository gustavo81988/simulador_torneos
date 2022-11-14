<?php
namespace App\Services;
use App\Services\Abstracts\Jugador;

class JugadorMasculino extends Jugador
{
    protected $primerNombre ;
    protected $segundoNombre;
    protected $habilidad;
    protected $puntuacion;
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
        return [
            $this->habilidad,
            $this->fuerza,
            $this->velocidad
        ];
    }
}