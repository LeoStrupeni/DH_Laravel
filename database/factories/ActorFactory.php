<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Actor;
use App\Movie;
use Faker\Generator as Faker;

$movies= Movie::all();

$factory->define(Actor::class, function (Faker $faker) use ($movies) {
    return [
        'first_name'=>$faker->word(),
        'last_name'=>$faker->word(),
        'rating'=>$faker->randomFloat(2,0, 10),
        'favorite_movie_id'=>$movies->shuffle()[0]->id,
        'foto'=>$faker->image()
    ];
});

