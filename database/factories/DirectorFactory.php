<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Director;
use Faker\Generator as Faker;

$factory->define(Director::class, function (Faker $faker) {
    return [
        'first_name'=> $faker->word(),
        'last_name' => $faker->word(),
        'birthday'  => $faker->date()
    ];
});
