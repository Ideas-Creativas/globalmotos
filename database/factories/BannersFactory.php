<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Banners;
use Faker\Generator as Faker;
use App\User;

$factory->define(Banners::class, function (Faker $faker) {
    return [
        'image_url'=> $faker->imageUrl($width = 640, $height = 480),
        'link'=> $faker->url(),
        'start'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'end'=> $faker->date($format = 'Y-m-d', $max = 'now + 1 month'),
        'user_id'=> User::all()->random()
    ];
});
