<?php

namespace Database\Seeders;

use App\Models\Season;
use App\Models\User;
use App\Models\Series;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
        ->count(10)
        ->has(Series::factory()->count(5)
            ->hasSeasons(5)
        )
        ->create();
    }
}
