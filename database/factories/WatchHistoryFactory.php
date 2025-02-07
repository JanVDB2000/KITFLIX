<?php

namespace Database\Factories;

use App\Enums\ContentType;
use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WatchHistory>
 */
class WatchHistoryFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'media_id'   => fake()->randomElement(Media::all()->pluck('id')->shuffle()->toArray()),
            'watched_at' => fake()->dateTimeBetween("-31 days"),  // Of een andere timestamp als dat van toepassing is
        ];
    }
}
