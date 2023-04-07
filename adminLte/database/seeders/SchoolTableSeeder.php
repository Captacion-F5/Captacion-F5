<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::firstOrcreate([
            'id' => 2,
            'name' => 'Malaga',
        ]);
        School::firstOrcreate([
            'id' => 3,
            'name' => 'Sevilla',
        ]);
        School::firstOrcreate([
            'id' => 1,
            'name' => 'Asturias',
        ]);
        School::firstOrcreate([
            'id' => 4,
            'name' => 'Barcelona',
        ]);
    }


}
