<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Voyage;
use Faker\Generator as Faker;

$factory->define(Voyage::class, function (Faker $faker) {
    return [
        'titre' => $faker->name,
        'destination' => $faker->country,
        'description' => $faker->text($maxNbChars = 200),
        'prix' => $faker->randomDigitNotNull,
        'image' => $faker->imageUrl($width = 640, $height = 480) 
    ];
});
