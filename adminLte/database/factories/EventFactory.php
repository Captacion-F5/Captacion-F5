<?php
namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'fecha' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }
}


