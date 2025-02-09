<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image_url', 'video_url', 'content_type'];

    /**
     * Een media-item kan in meerdere categorieën voorkomen.
     */
    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'media_category');
    }

    /**
     * Als het media-item een serie is, heeft het meerdere seizoenen.
     */
    public function seasons(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Season::class);
    }

    /**
     * Een media-item kan door profielen als favoriet worden gemarkeerd.
     */
    public function favorites(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    /**
     * Haal alle kijkgeschiedenis-items voor dit media-item op.
     */
    public function watchHistories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(WatchHistory::class);
    }

    /**
     * Een media-item behoort tot een genre.
     */
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
