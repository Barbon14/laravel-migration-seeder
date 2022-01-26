<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [

        'name',
        'genre',
        'explicit',
        'tracks_number',
        'total_duration',
        'price'
    ];
}
