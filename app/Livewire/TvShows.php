<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Media;
use App\Models\Genre;

class TvShows extends Component
{
    public $selectedGenre = '';
    public $medias = [];
    public $genres = [];

    public function mount()
    {
        // Retrieve all genres
        $this->genres = Genre::all();
        // Load all TV shows initially
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
     * Laad media met content_type 'serie' en pas genrefiltering toe indien geselecteerd.
     */
    private function loadMedias()
    {
        $query = Media::where('content_type', 'serie');
        if (!empty($this->selectedGenre)) {
            $query->where('genre_id', $this->selectedGenre);
        }

        $this->medias = $query->get();
    }

    public function render()
    {
        return view('livewire.tv-shows', [
            'genres' => $this->genres,
            'medias' => $this->medias,
        ]);
    }
}
