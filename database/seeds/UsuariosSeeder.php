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
                'id' => '11202000',
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
                'id' => '16309590',
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
                'id' => '13503682',
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
                'id' => '18552352',
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
                'id' => '10653672',
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
                'id' => '13973383',
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
                'id' => '15834907',
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
                'id' => '12529634',
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

        DB::table('usuarios')->insert([
            [
                'id' => '11033139',
                'nombre' => 'Gabriela',
                'apellido' => 'Garcia',
                'sexo' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '16797179',
                'nombre' => 'Cindy',
                'apellido' => 'Gonzales',
                'sexo' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '18137001',
                'nombre' => 'Kimberline',
                'apellido' => 'Torrealba',
                'sexo' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '14062236',
                'nombre' => 'Rosa',
                'apellido' => 'Herrera',
                'sexo' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '18506107',
                'nombre' => 'Franchesca',
                'apellido' => 'Martines',
                'sexo' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '19172388',
                'nombre' => 'Candance',
                'apellido' => 'Owens',
                'sexo' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '13130751',
                'nombre' => 'Genesis',
                'apellido' => 'Blanco',
                'sexo' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '16037645',
                'nombre' => 'Maria',
                'apellido' => 'Bermudez',
                'sexo' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '14747984',
                'nombre' => 'Jessica',
                'apellido' => 'Bandres',
                'sexo' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
