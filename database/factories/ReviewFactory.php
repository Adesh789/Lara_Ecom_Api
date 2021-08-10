<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'customer' => $faker->name,
        'review' => $faker->text,
        'star' => $faker->numberBetween(0, 5),        
    ];
});
