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
            'fecha' => '2023/08/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'JPA',
            'fecha' => '2023/09/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'TPB',
            'fecha' => '2023/03/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'TF5',
            'fecha' => '2023/03/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'RIC',
            'fecha' => '2023/08/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'JPA',
            'fecha' => '2023/09/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'TPB',
            'fecha' => '2023/03/01'
        ]);
        Event::firstOrCreate([
            'nombre'=> 'TF5',
            'fecha' => '2023/03/01'
        ]);
       
    }
}
