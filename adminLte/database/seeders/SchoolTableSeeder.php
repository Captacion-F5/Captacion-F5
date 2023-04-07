<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolTableSeeder extends Seeder
{
    
    public function run(): void
    {
        $faker = \Faker\Factory::create('es_ES');
        for ($i = 0; $i < 5; $i++) {
            School::create([
                'name' => $faker->state,
            ]);
        }
    }
}