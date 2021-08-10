<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'price' => $faker->numberBetween(100, 1000),
        'stock' => $faker->numberBetween(0, 10),
        'discount' => $faker->numberBetween(0, 15),        
        'user_id' => function(){
            return App\User::all()->random();
        }        
    ];
});
