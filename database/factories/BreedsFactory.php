<?php

namespace Database\Factories;

use App\Models\Breeds;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BreedsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Breeds::class;

    public function definition(): array
    {
        return [
            'breed' => fake()->name(),
        ];
    }
}
