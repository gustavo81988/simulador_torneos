<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Services\JugadorMasculino;
use App\Services\JugadorFemenino;
use App\Services\Habilidad;

class Usuario extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'primer_nombre', 'segundo_nombre'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function listarJudadores(\Illuminate\Http\Request $request): \Illuminate\Support\Collection{
        $jugadores = Usuario::select(DB::raw('
            id,
            CONCAT(usuarios.nombre, " ",usuarios.apellido) as nombre_completo
            (CASE usuarios.genero
                WHEN "M" THEN "Masculino"
                WHEN "F" THEN "Femenino"
                ELSE "Sin Asignar"
            END) as genero,
            habilidad,
            fuerza,
            velocidad,
            tiempo_reaccion,
            DATE_FORMAT(usuarios.created_at,"%d/%m/%Y") as fecha_torneo
        '))
    }

    public function jugadoresMasculinos($usuarios){
        $jugadores = [];
        foreach($usuarios as $jugador){
            $jugadores[] = new JugadorMasculino(
                $jugador['id'],
                $jugador['nombre'],
                $jugador['apellido'],
                new Habilidad('Habilidad',$jugador['habilidad'],3),
                new Habilidad('Fuerza',$jugador['fuerza'],1),
                new Habilidad('Velocidad',$jugador['velocidad'],3)
            );
        }
        return $jugadores;
    }

    public function jugadoresFemeninos($usuarios){
        $jugadores = [];
        foreach($usuarios as $jugador){
            $jugadores[] = new JugadorMasculino(
                $jugador['id'],
                $jugador['nombre'],
                $jugador['apellido'],
                new Habilidad('Habilidad',$jugador['habilidad'],1),
                new Habilidad('Tiempo de Reaccion',$jugador['tiempo_reaccion'],1)
            );
        }
        return $jugadores;
    }
}
