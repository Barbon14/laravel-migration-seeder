<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'genre' => $faker -> word(),
        'duration' => $faker -> time('i:s'),
        'explicit' => $faker -> boolean(),
        'single' => $faker -> boolean(),
        'rating' => $faker -> numberBetween(0, 10),
        'lyric' => $faker -> text(250) 
    ];
});
