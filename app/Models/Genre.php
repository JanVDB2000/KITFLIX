<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name','media_id'];

    /**
     * Een Genre-item verwijst naar een media-item.
     */
    public function media()
    {
        return $this->belongsTo(Media::class);
    }
}
