<?php

namespace Database\Factories;

use App\Models\Season;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $episodeNumber = 0;

        return [
            'season_id' => Season::factory(),
            'episode_number' => $episodeNumber++ % 20 + 1,
            'watched_episode' => fake()->boolean(),
            'assisted_in' => fake()->dateTimeBetween('-3 years', 'now'),
        ];
    }
}
