<?php

namespace Database\Factories;

use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class BootcampFactory extends Factory
{
    protected $model = Bootcamp::class;

    public function definition()
    {
        $faker = FakerFactory::create('es_ES');
        $schools = School::pluck('id')->toArray();

        return [
            'nombre' => $faker->name(),
            'school_id' => $faker->randomElement($schools),
            'inicio' => $faker->dateTime(),
        ];
    }
}
