<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Media;
use App\Models\Genre;

class Movies extends Component
{
    public $selectedGenre = '';
    public $medias = [];
    public $genres = [];

    public function mount()
    {

        $this->genres = Genre::all();
        $this->loadMedias();
    }

    /**
     * Update de lijst met media zodra een genre wordt geselecteerd.
     */
    public function updatedSelectedGenre()
    {
        $this->loadMedias();
    }

    /**
     * Laad media met content_type 'movie' en pas genrefiltering toe indien geselecteerd.
     */
    private function loadMedias(): void
    {
        $query = Media::where('content_type', 'movie');
        if (!empty($this->selectedGenre)) {
            $query->where('genre_id', $this->selectedGenre);
        }

        $this->medias = $query->get();
    }

    public function render()
    {
        return view('livewire.movies', [
            'genres' => $this->genres,
            'medias' => $this->medias,
        ]);
    }
}
