<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = ['season_id', 'episode_number', 'title', 'description', 'image_url', 'video_url'];

    /**
     * Een aflevering behoort tot een seizoen.
     */
    public function season(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Season::class);
    }
}
