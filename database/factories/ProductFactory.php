<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->text($maxNbChars = 10),
        'price' => $faker->randomFloat($nbMaxDecimals = 3, $min = 1, $max = 100),
        'store_id' => App\Store::all()->random()->id
    ];
});
