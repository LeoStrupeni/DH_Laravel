<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use App\Genre;
use App\Director;
use Faker\Generator as Faker;

$genre = Genre::all();
$director = Director::all();

$factory->define(Movie::class, function (Faker $faker) use ($director,$genre) {
    return [
        'title'         =>$faker->word(), 
        'awards'        =>$faker->randomDigit,
        'release_date'  =>$faker->date(),
        'length'        =>$faker->randomDigit,
        'genre_id'      =>$genre->shuffle()[0]->id,
        'Revenue'       =>$faker->randomFloat(2,0, 1000000) ,
        'director_id'   =>$director->shuffle()[0]->id,
    ];
});

