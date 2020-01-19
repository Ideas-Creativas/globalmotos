<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Marcas;
use Faker\Generator as Faker;
use App\User;

$factory->define(Marcas::class, function (Faker $faker) {
    return [
        'marca'=> $faker->company(),
        'image_url'=> $faker->imageUrl($width = 640, $height = 480),
        'user_id' => User::all()->random()
    ];
});
