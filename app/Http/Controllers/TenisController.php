<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenisController extends Controller
{
    public function index(Request $request){
        $total_request = count($request->all());
        if( ($total_request % 2) == 0 ) {
            return $this->generarEncuentros($request->all());
        }else{
            echo 'Error: La cantidad de jugadores debe ser par';
        }
    }

    public function jugador(){

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

    // public function index(Request $request){
    //     $jugador1 = $this->obtenerHabilidades(290); 
    //     $jugador2 = $this->obtenerHabilidades(30);
    //     return rand(1,20);
    // }
}
