<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

function generateProducts(){
    $products=array();
    for($i=0;$i < rand(1,3); $i++){
        $product=App\Product::all()->random();
        $product->quantity=rand(1,4);
        $products[]=$product;
    }
    return json_encode($products);
}

$factory->define(Order::class, function (Faker $faker) {
    return [
        'transaction_id' => $faker->randomNumber($nbDigits = 8, $strict = false),
        'payment_type' => $faker->randomElement($array=array('visa','knet','cash')),
        'status' => $faker->randomElement($array = array('delivered', 'paid', 'pending','failed')),
        'products' => generateProducts(),
        'store_id' => App\Store::all()->random()->id,
        'user_id' => App\User::all()->random()->id
    ];
});
