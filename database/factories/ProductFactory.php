<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use App\User;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'image' => $faker->word,
        'price' => $faker->numberBetween(1, 100000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2, 30),
        'user_id' => function() {
            return User::all()->random();
        }
    ];
});
 