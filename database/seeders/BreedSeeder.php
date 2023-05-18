<?php

namespace Database\Seeders;

use App\Models\Breeds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    /**
     * Run Breed Seeder to seed Breeds Database.
     * Remaind that this is not real data.
     * Therefores, there'll be gibberish.
     */
    public function run(): void
    {
        Breeds::factory(20)->create();
    }
}
