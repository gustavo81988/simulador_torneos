<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    protected $guarded = ['id'];
    
    public function listarTorneos(\Illuminate\Http\Request $request): \Illuminate\Support\Collection{
        $torneos = Torneo::select(DB::raw('
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
        if($request->fecha_inicio and $request->fecha_fin){
            $torneos->whereDate('torneos.created_at','>=',date($request->fecha_inicio)) 
                ->whereDate('torneos.created_at','<=',date($request->fecha_fin));
        } 
        $request->genero     ? $torneos->where('torneos.genero',$request->genero) : NULL;
        $request->id_ganador ? $torneos->where('usuarios.id',$request->id_ganador) : NULL;
        return $torneos->get();
    }

    public function detalleTorneo(\Illuminate\Http\Request $request): \Illuminate\Support\Collection{
        $torneos = DB::Table('partidos')->select(DB::raw('
                CONCAT(jugador_1.nombre, " ",jugador_1.apellido) as jugador_1,
                CONCAT(jugador_2.nombre, " ",jugador_2.apellido) as jugador_2,
                puntuacion_jugador_1,
                puntuacion_jugador_2,
                ronda
            '))
            ->join('usuarios as jugador_1',function($join){
                $join->on('jugador_1.id','=','partidos.id_jugador_1');
            })
            ->join('usuarios as jugador_2',function($join){
                $join->on('jugador_2.id','=','partidos.id_jugador_2');
            })
            ->where('partidos.id_torneo',$request->id_torneo)
            ->orderBy('ronda','asc')
        ;
        return $torneos->get();
    }
}
