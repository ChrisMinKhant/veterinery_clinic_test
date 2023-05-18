<?php

namespace Database\Factories;

use App\Models\Townships;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Townships>
 */
class TownshipsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Townships::class;

    public function definition(): array
    {
        return [
            'township' => fake()->name(),
        ];
    }
}
