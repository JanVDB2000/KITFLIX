<?php

namespace Database\Factories;

use App\Enums\ContentType;
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
    public function definition(): array
    {
        return [
            // media_id wordt via relaties toegewezen in de seeder (of via ->for() in de factory)
            'season_number' => fake()->numberBetween(1, 10),
        ];
    }
}
