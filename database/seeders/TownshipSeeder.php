<?php

namespace Database\Seeders;

use App\Models\Townships;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TownshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Townships::factory(20)->create();
    }
}
