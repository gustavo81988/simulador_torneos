<?php
namespace App\Services\Interfaces;

interface Jugador
{
    public function nombreCompleto():string;
    public function estadisticas():array;
}