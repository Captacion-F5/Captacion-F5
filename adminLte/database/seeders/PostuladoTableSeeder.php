<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Postulado;
use Faker\Factory as Faker;

class PostuladoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('es_Es');
    
        for ($i = 0; $i < 100; $i++) {
            Postulado::firstOrCreate([
                'nombre' => $faker->name,
                'genero' => $faker->randomElement(['masculino', 'femenino', 'no binario']),
                'mail' => $faker->email,
                'fecha-nacimiento' => $faker->randomElement(['1978/07/12', '1981/09/09', '1996/09/08', '1991/01/01', '1988/09/07']),
                'telefono' => $faker->phoneNumber,
                'direccion' => $faker->address,
                'motivacion' => $faker->text,
                'ingles' => $faker->randomElement(['ninguno', 'básico', 'intermedio', 'avanzado']),
                'estudios' => $faker->randomElement(['sin estudios', 'primarios', 'secundarios', 'terciarios', 'universitarios']),
                'otra-formacion' => $faker->text,
                'como-conocido' => $faker->randomElement(['internet', 'amigos', 'redes sociales', 'otros']),
                'situacion-profesional' => $faker->randomElement(['estudiante', 'trabajando', 'desempleado']),
                'url_perfil' => $faker->url,
                'terminos' => $faker->randomElement(['aceptado', 'rechazado']),
            ]);
        }
    }
}    
