<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'director',
        'image_url',
        'duration',
        'release_date',
        'genre',
    ];

    public static function scopeSearchByTitle($query, $title)
    {
        if (!$title) {
            return $query;
        }
        return $query->where('title', 'like', "%$title%");
    }

    public static function scopeSearchByDirector($query, $director)
    {
        if (!$director) {
            return $query;
        }
        return $query->where('director', 'like', "%$director%");
    }

    public static function scopeSearchByGenre($query, $genre)
    {
        if (!$genre) {
            return $query;
        }
        return $query->where('genre', 'like', "%$genre%");
    }
}
