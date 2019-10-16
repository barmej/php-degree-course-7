<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->text($maxNbChars = 20),
        'user_id' => App\User::all()->random()->id
    ];
});
