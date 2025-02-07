<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = ['media_id', 'season_number'];

    /**
     * Een seizoen behoort tot een media-item (serie).
     */
    public function media(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Media::class);
    }

    /**
     * Een seizoen bevat meerdere afleveringen.
     */
    public function episodes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Episode::class);
    }
}
