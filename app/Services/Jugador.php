<?php
namespace App\Services;

interface Jugador
{
    public function nombreCompleto():string;
    public function estadisticas():array;
}