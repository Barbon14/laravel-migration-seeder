<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;

use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [

        'name' => $faker -> name(),
        'genre' => $faker -> word(),
        'explicit' => $faker -> boolean(),
        'tracks_number' => $faker -> numberBetween(0, 60),
        'total_duration' => $faker ->time(),
        'price' => $faker -> randomFloat(2, 9, 79)
    ];
});
