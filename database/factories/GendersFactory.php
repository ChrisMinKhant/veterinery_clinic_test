<?php

namespace Database\Factories;

use App\Models\Genders;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genders>
 */
class GendersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Genders::class;

    public function definition(): array
    {
        return [
            'gender' => 'male',
        ];
    }
}
