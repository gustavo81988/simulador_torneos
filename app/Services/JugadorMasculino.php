<?php
namespace App\Services;
use App\Services\Abstracts\Jugador;

class JugadorMasculino extends Jugador
{
    protected $id;
    protected $nombre ;
    protected $apellido;
    protected $habilidad;
    protected $fuerza;
    protected $velocidad;
    protected $puntuacion;

    public function __construct(
        $id,$nombre, $apellido, $habilidad,
        $fuerza,$velocidad
    ){
        $this->id        = $id;
        $this->nombre    = $nombre;
        $this->apellido  = $apellido;
        $this->habilidad = $habilidad;
        $this->fuerza    = $fuerza;
        $this->velocidad = $velocidad;
    }

    public function obtenerHabilidades():array{
        return[
            $this->habilidad->nombre => $this->habilidad,
            $this->fuerza->nombre    => $this->fuerza,
            $this->velocidad->nombre => $this->velocidad
        ];
    }
}