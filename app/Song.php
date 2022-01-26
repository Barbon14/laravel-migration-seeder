<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [

        'title',
        'genre',
        'duration',
        'explicit',
        'single',
        'rating',
        'lyric'
    ];
}
