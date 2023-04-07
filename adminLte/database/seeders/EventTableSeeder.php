<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::firstOrCreate([
            'nombre'=> 'RIC',
            'bootcamp_id' => 5,
            'fecha' => '2023/08/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'JPA',
            'bootcamp_id' => 6,
            'fecha' => '2023/09/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'TPB',
            'bootcamp_id' => 7,
            'fecha' => '2023/03/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'TF5',
            'bootcamp_id' => 8,
            'fecha' => '2023/03/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'RIC',
            'bootcamp_id' => 9,
            'fecha' => '2023/08/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'JPA',
            'bootcamp_id' => 5,
            'fecha' => '2023/09/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'TPB',
            'bootcamp_id' => 6,
            'fecha' => '2023/03/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'TF5',
            'bootcamp_id' => 7,
            'fecha' => '2023/03/01'
        ]);
       
    }
}
