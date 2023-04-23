<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use Faker\Factory as Faker;

class BootcampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        Bootcamp::firstOrCreate([
            'nombre' => 'FemNorte',
            'school_id' => 1,
            'inicio' => $faker->dateTime(),

        ]);
        Bootcamp::firstOrCreate([
            'nombre' => 'RuralCamp',
            'school_id' => 1,
            'inicio' => $faker->dateTime(),


        ]);
        Bootcamp::firstOrCreate([
            'nombre' => 'FemMalaga',
            'school_id' => 2,
            'inicio' => $faker->dateTime(),
        ]);
        Bootcamp::firstOrCreate([
            'nombre' => 'FemSevilla',
            'school_id' => 3,
            'inicio' => $faker->dateTime(),

        ]);
        Bootcamp::firstOrCreate([
            'nombre' => 'FemBarna',
            'school_id' => 4,
            'inicio' => $faker->dateTime(),
        ]);
    }
}
