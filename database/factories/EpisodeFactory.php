<?php

namespace Database\Factories;

use App\Enums\ContentType;
use App\Services\CatImageService;
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
    public function definition(): array
    {
        return [
            'title'       => fake()->sentence,
            'description' => fake()->paragraph,
            'image_url'     => (new CatImageService())->getImage()?->url,
            'video_url'     => 'https://www.youtube.com/watch?v=MlDtL2hIj-Q',
        ];
    }
}
