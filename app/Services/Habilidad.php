<?php
namespace App\Services;

class Habilidad
{
    public $nombre;
    public $valor;
    public $ponderacion;

    public function __construct(string $nombre,int $valor,int $ponderacion){
        $this->nombre      = $nombre;
        $this->valor       = $valor;
        $this->ponderacion = $ponderacion;
    }
}