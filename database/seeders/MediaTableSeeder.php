<?php

namespace Database\Seeders;

use App\Enums\ContentType;
use App\Models\Episode;
use App\Models\Genre;
use App\Models\Media;
use App\Models\Season;
use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Maak 250 media-items aan via de factory
        $mediaItems = Media::factory(100)->create();
        // Loop door elk media-item
        foreach ($mediaItems as $media) {
            // Controleer of het media-item een serie is
            if ($media->content_type === ContentType::Serie->value) {
                // Bepaal een willekeurig aantal seizoenen voor deze serie (bijvoorbeeld tussen de 1 en 5)
                $seasonCount = rand(1, 5);
                for ($s = 1; $s <= $seasonCount; $s++) {
                    // Maak een seizoen aan en stel het seizoensnummer in
                    $season = Season::factory()->create([
                        'media_id'      => $media->id,
                        'season_number' => $s,
                    ]);
                    // Bepaal een willekeurig aantal afleveringen voor dit seizoen (bijvoorbeeld tussen de 8 en 13)
                    $episodeCount = rand(8, 13);
                    for ($e = 1; $e <= $episodeCount; $e++) {
                        // Maak een aflevering aan en stel het afleveringsnummer in
                        Episode::factory()->create([
                            'season_id'      => $season->id,
                            'episode_number' => $e,
                        ]);
                    }
                }
            }
        }
    }
}
