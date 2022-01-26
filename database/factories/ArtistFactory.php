<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;

use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [

        'name' => $faker -> name(),
        'surname' => $faker -> name(),
        'stage_name' => $faker -> name(),
        'main_genre' => $faker -> word(),
        'bio' => $faker -> text(250),
        'album_published' => $faker -> numberBetween(1, 20),
        'total_streaming' => $faker -> numberBetween(),
    ];
});
