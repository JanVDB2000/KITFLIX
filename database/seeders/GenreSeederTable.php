<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            "2025 Kitflix Oscars",
            "Action",
            "Adventure Movies",
            "Anime",
            "Award-Winning",
            "Comedies",
            "Crime",
            "Documentaries",
            "Dramas",
            "European",
            "Fantasy",
            "Hollywood",
            "Horror",
            "Independent",
            "International",
            "Kids & Family",
            "Music & Musicals",
            "Romance",
            "Sci-Fi",
            "Shorts",
            "Sports",
            "Stand-Up Comedy",
            "Thriller"
        ];

        foreach ($genres as $genre) {
            Genre::create(['name' => $genre]);
        }
    }
}
