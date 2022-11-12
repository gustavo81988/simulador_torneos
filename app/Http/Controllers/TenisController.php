<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenisController extends Controller
{
    public function index(Request $request){
        dd(count($request->all()));
    }

    public function generarEncuentros($jugadores){
        dd(count($jugadores));
    }

    public function obtenerHabilidades($total){
        $diff = floor($total) -20;
        $diff = $diff > 0 ? $diff : 0;
        return $diff;        
    }

    public function obtenerGanador($jugador1,$jugador2){

    }

    // public function index(Request $request){
    //     $jugador1 = $this->obtenerHabilidades(290); 
    //     $jugador2 = $this->obtenerHabilidades(30);
    //     return rand(1,20);
    // }
}
