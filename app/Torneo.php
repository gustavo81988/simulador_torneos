<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Torneo extends Model
{
    protected $guarded = ['id'];
    
    public function listarTorneos(Request $request){
        $torneos = DB::table('torneos')
            ->select(DB::raw('
                torneos.id as id_torneo,
                torneos.nombre as nombre_torneo,
                (CASE torneos.genero
                    WHEN "M" THEN "Masculino"
                    WHEN "F" THEN "Femenino"
                    ELSE "Sin Asignar"
                END) as genero,
                CONCAT(usuarios.nombre, " ",usuarios.apellido) as ganador,
                DATE_FORMAT(torneos.created_at,"%d/%m/%Y") as fecha_torneo

            '))
            ->join('usuarios',function($join){
                $join->on('usuarios.id','=','torneos.id_usuario_ganador');
            })
        ;

        $request->fecha   ? $torneos->whereDate('torneos.created_at',date($request->fecha)) : NULL;
        $request->genero  ? $torneos->where('torneos.genero',$request->genero) : NULL;
        $request->ganador ? $torneos->where('usuarios.id',$request->ganador) : NULL;
        return $torneos->get();
    }
}
