<?php
namespace App\Services;
use App\Services\Abstracts\Jugador;

class JugadorFemenino extends Jugador
{
    public $nombre ;
    public $apellido;
    public $habilidad;
    public $tiempo_reaccion;
    protected $puntuacion;

    public function __construct(
        $nombre,$apellido,$habilidad,
        $tiempo_reaccion
    ){
        $this->nombre          = $nombre;
        $this->apellido        = $apellido;
        $this->habilidad       = $habilidad;
        $this->tiempo_reaccion = $tiempo_reaccion;
    }

    public function obtenerHabilidades():array{
        return[
            $this->habilidad->nombre => $this->habilidad,
            $this->tiempo_reaccion->nombre    => $this->tiempo_reaccion
        ];
    }
}