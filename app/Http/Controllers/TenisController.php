<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenisController extends Controller
{
    public function index(Request $request){
        return $this->generarEncuentros($request->all());
    }

    public function rondaEliminatoria($encuentros){

    }

    public function generarEncuentros($jugadores){
        shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        return $encuentros;
    }

    public function obtenerHabilidades($total){
        $diff = floor($total) -20;
        $diff = $diff > 0 ? $diff : 0;
        return $diff;        
    }

    public function obtenerGanador($jugador1,$jugador2){

    }
}
