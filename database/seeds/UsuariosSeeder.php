<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Gustavo',
                'apellido' => 'Ramirez',
                'sexo' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Pedro',
                'apellido' => 'Asuaje',
                'sexo' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Wilfredo',
                'apellido' => 'Garcia',
                'sexo' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Luis',
                'apellido' => 'Sanchez',
                'sexo' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Daniel',
                'apellido' => 'Rodriguez',
                'sexo' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Fidel',
                'apellido' => 'Bandres',
                'sexo' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Cesar',
                'apellido' => 'Chirinos',
                'sexo' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'Hector',
                'apellido' => 'Rivero',
                'sexo' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
