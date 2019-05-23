<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'like' =>$faker->randomDigit,
        'title' =>$faker->streetName,
        'content' =>$faker->sentence($nbWords = 6, $variableNbWords = true),
        'active' =>$faker->boolean,
        'author' =>$faker->name,
        'visited' =>$faker->randomDigit,
        'voyage_id' =>$faker->numberBetween($min = 1, $max = 15) ,
    ];
});
