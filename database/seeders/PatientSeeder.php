<?php

namespace Database\Seeders;

use App\Models\Patients;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patients::factory(20)->create();
    }
}
