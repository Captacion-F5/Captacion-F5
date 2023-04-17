<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        SchoolTableSeeder::class,
        BootcampTableSeeder::class,
        EventTableSeeder::class,
        PostuladoTableSeeder::class
        
        // php artisan migrate:fresh --seed
        
       ]);
    }
}
