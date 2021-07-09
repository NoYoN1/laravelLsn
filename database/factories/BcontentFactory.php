<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Bcontent;

$factory->define(Bcontent::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(20),
        'contents' => $faker->realText(50),
        'created_at' => $faker->dateTime($max = 'now', $timezone =
            date_default_timezone_get()),
    ];
});
