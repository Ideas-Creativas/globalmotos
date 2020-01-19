<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Motos;
use Faker\Generator as Faker;
use App\User;
use App\Marcas;

$factory->define(Motos::class, function (Faker $faker) {
    return [
        'umage_url' => $faker->imageUrl($width = 640, $height = 480),
        'user_id' => User::all()->random(),
        'marca_id' => Marcas::all()->random(),
        'description' => "[{
          'modelo' : '". $faker->companySuffix()."',
          'cilindrada':'".$faker->numberBetween($min = 110, $max = 250)."',
          'precio' : '".$faker->randomFloat($nbMaxDecimals = 2, $min = 35000, $max = 120000)."',
          'disponible':'".$faker->numberBetween($min = 0, $max = 1)."',
          'dimensiones':'".$faker->numberBetween($min = 1980, $max = 2000)."',
          'peso':'".$faker->numberBetween($min = 90, $max = 99)."',
          'potencia':'".$faker->numberBetween($min = 5, $max = 7)."',
          'neumaticos':'".$faker->realText($maxNbChars = 10, $indexSize = 5)."',
        }]"
    ];
});
