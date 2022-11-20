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
                'genero' => 'M',
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
                'genero' => 'M',
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
                'genero' => 'M',
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
                'genero' => 'M',
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
                'genero' => 'M',
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
                'genero' => 'M',
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
                'genero' => 'M',
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
                'genero' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '16226790',
                'nombre' => 'Miguel',
                'apellido' => 'Reyes',
                'genero' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '13419096',
                'nombre' => 'Jose',
                'apellido' => 'Semeco',
                'genero' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '10134532',
                'nombre' => 'Jesus',
                'apellido' => 'Ordóñez',
                'genero' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '14953988',
                'nombre' => 'Pablo',
                'apellido' => 'Neruda',
                'genero' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '17060090',
                'nombre' => 'John',
                'apellido' => 'Lennon',
                'genero' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '10624046',
                'nombre' => 'Mike',
                'apellido' => 'Portnoy',
                'genero' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '14794402',
                'nombre' => 'Ricardo',
                'apellido' => 'Medori',
                'genero' => 'M',
                'habilidad' => rand(70,100),
                'fuerza' => rand(70,100),
                'velocidad' => rand(70,100),
                'tiempo_reaccion' => NULL,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '12457883',
                'nombre' => 'Mark',
                'apellido' => 'Dice',
                'genero' => 'M',
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
                'genero' => 'F',
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
                'genero' => 'F',
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
                'genero' => 'F',
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
                'genero' => 'F',
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
                'genero' => 'F',
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
                'genero' => 'F',
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
                'genero' => 'F',
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
                'genero' => 'F',
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
                'genero' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '18178817',
                'nombre' => 'Martha',
                'apellido' => 'Wayne',
                'genero' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '10975912',
                'nombre' => 'Avril',
                'apellido' => 'Lavigne',
                'genero' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '17454074',
                'nombre' => 'Keri',
                'apellido' => 'Russell',
                'genero' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '18320517',
                'nombre' => 'Jennifer',
                'apellido' => 'Lawrence',
                'genero' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '16619612',
                'nombre' => 'Sara',
                'apellido' => 'Torres',
                'genero' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '14698162',
                'nombre' => 'Sofía',
                'apellido' => 'Vergara',
                'genero' => 'F',
                'habilidad' => rand(70,100),
                'fuerza' => NULL,
                'velocidad' => NULL,
                'tiempo_reaccion' => rand(70,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => '13364353',
                'nombre' => 'Elizabeth',
                'apellido' => 'Olsen',
                'genero' => 'F',
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
