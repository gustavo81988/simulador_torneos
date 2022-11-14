<?php
namespace App\Services;
use App\Services\Interfaces\Jugador;

class Partido
{
    protected $nombre;
    protected $valor;
    protected $ponderacion;

    public function __construc(string $nombre,int $valor,int $ponderacion){
        $this->nombre      = $nombre;
        $this->valor       = $valor;
        $this->ponderacion = $ponderacion;
    }

    public function obtenerNombre(): string{
        return $this->nombre;
    }

    public function obtenerValor(): int{
        return $this->valor;
    }

    public function obtenerPonderacion(): int{
        return $this->ponderacion;
    }
}