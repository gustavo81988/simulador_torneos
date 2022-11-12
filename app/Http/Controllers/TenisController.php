<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Personas;

class TenisController extends Controller
{
    public function index(Request $request){
        $encuentros = $this->generarEncuentros($request->all());
        $this->rondaEliminatoria($encuentros);
    }

    public function rondaEliminatoria($encuentros){
        foreach($encuentros as $encuentro){
            $jugador1 = $encuentro[0];
            $jugador2 = $encuentro[1];
            $this->competir($jugador1,$jugador2);
        }
    }

    public function generarEncuentros($jugadores){
        shuffle($jugadores);
        $encuentros = array_chunk($jugadores,2);
        return $encuentros;
    }

    public function competir($jugador1, $jugador2){
        dd($jugador1);
    }

    public function obtenerHabilidades($total){
        $diff = floor($total) -20;
        $diff = $diff > 0 ? $diff : 0;
        return $diff;        
    }
}
