<?php

namespace Database\Factories;

use App\Enums\SeasonStatus;
use App\Models\Series;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Season>
 */
class SeasonFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $seasonNumber = 0;

        return [
            'series_id' => Series::factory(),
            'season_description' => fake('pt_BR')->paragraph(1),
            'season_number' => $seasonNumber++ % 5 + 1,
            'status' => fake()->randomElement(SeasonStatus::cases()),
        ];
    }
}
