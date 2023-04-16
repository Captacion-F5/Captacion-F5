<?php

namespace Database\Factories;

use App\Models\Postulado;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostuladoFactory extends Factory
{
    protected $model = Postulado::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'genero' => $this->faker->randomElement(['hombre', 'mujer', 'no binario', 'prefiero no contestar']),
            'mail' => $this->faker->email(),
            'fecha_nacimiento' => $this->faker->dateTimeBetween('-40 years', '-18 years')->format('Y/m/d'),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
            'motivacion' => $this->faker->paragraph(),
            'ingles' => $this->faker->randomElement(['ninguno', 'básico', 'intermedio', 'avanzado']),
            'estudios' => $this->faker->randomElement(['sin estudios', 'primarios', 'secundarios', 'terciarios', 'universitarios']),
            'otra_formacion' => $this->faker->sentence(),
            'como_conocido' => $this->faker->randomElement(['internet', 'amigos', 'redes sociales', 'otros']),
            'situacion_profesional' => $this->faker->randomElement(['estudiante', 'trabajando', 'desempleado']),
            'url_perfil' => $this->faker->url(),
            'terminos' => $this->faker->randomElement(['aceptado', 'rechazado']),
        ];
    }
}
