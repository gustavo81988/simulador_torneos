<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class UsuarioController extends Controller
{
    public function guardar(Request $request){
        foreach($request->all() as $jugador){
            try{
                DB::table('usuarios')->updateOrInsert(
                    [
                        'id' => isset($jugador['id'])?$jugador['id']:NULL,
                    ],
                    [
                        'id'              => isset($jugador['id'])?$jugador['id']:NULL,
                        'nombre'          => isset($jugador['nombre'])?$jugador['nombre']:NULL,
                        'apellido'        => isset($jugador['apellido'])?$jugador['apellido']:NULL,
                        'sexo'            => isset($jugador['sexo'])?$jugador['sexo']:NULL,
                        'habilidad'       => isset($jugador['habilidad'])?$jugador['habilidad']:NULL,
                        'fuerza'          => isset($jugador['fuerza'])?$jugador['fuerza']:NULL,
                        'velocidad'       => isset($jugador['velocidad'])?$jugador['velocidad']:NULL,
                        'tiempo_reaccion' => isset($jugador['tiempo_reaccion'])?$jugador['tiempo_reaccion']:NULL,
                        'created_at'      => Carbon::now(),
                        'updated_at'      => Carbon::now()
                    ]
                );
            }catch(\Illuminate\Database\QueryException $ex){
                \Log::info($ex->getMessage());
            }
        }
    }
}
