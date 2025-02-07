<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'media_id',
        'watched_at',
    ];

    /**
     * Een kijkgeschiedenis-item behoort tot een profiel.
     */
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    /**
     * Een kijkgeschiedenis-item verwijst naar een media-item.
     */
    public function media()
    {
        return $this->belongsTo(Media::class);
    }
}

