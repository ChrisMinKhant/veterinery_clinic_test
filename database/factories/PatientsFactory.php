<?php

namespace Database\Factories;

use App\Models\Patients;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patients>
 */
class PatientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Patients::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'status' => fake()->numberBetween(1, 3),
            'pawrent' => fake()->name(),
            'breed' => fake()->numberBetween(1, 20),
            'gender' => fake()->numberBetween(1, 2),
            'date_of_birth' => fake()->date(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'township' => fake()->numberBetween(1, 20),
        ];
    }
}
