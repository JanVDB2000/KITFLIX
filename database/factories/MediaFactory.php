<?php

namespace Database\Factories;

use App\Enums\ContentType;
use App\Services\CatImageService;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Stel een array samen waarin ContentType::Movie 80% van de tijd voorkomt en ContentType::Serie 20%.
        $contentTypes = array_merge(
            array_fill(0, 8, ContentType::Movie),
            array_fill(0, 2, ContentType::Serie)
        );

        // Kies willekeurig één van de enum-waarden.
        $contentType = fake()->randomElement($contentTypes);

        return [
            'title'         => fake()->sentence(3),
            'description'   => fake()->paragraph(2),
            'api_id'        => fake()->unique()->uuid,
            'image_url'     => (new CatImageService())->getImage()->url,
            'views'         => fake()->numberBetween(0, 1000),
            'video_url'     => 'https://www.youtube.com/watch?v=MlDtL2hIj-Q',
            // Gebruik de waarde van de enum voor opslag in de database.
            'content_type'  => $contentType->value,
        ];
    }
}
