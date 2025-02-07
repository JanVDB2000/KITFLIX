<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'profile_name'];

    /**
     * Een profiel behoort tot een gebruiker.
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Een profiel heeft meerdere favorieten.
     */
    public function favorites(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    /**
     * Haal alle kijkgeschiedenis-items van dit profiel op.
     */
    public function watchHistories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(WatchHistory::class);
    }
}
