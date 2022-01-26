<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [

        'name',
        'surname',
        'stage_name',
        'main_genre',
        'bio',
        'album_published',
        'total_streaming',
        'genre'
    ];
}
