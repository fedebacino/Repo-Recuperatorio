<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Actor;

class Movie extends Model
{
    protected $guarded = [];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function actors()
    {
        return $this->belongsToMany(Actor::class)->withPivot('actor_id', 'movie_id');
    }
}
