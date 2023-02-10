<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Series>
 */
class SeriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->unique()->word(),
            'series_description' => fake('pt_BR')->sentence(),
            'evaluation_note' => fake()->numberBetween(0,10),
            'release_date' => fake()->date('Y-m-d', '-10 years')
        ];
    }
}
