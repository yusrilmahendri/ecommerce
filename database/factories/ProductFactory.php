<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'category_id' => $faker->numberBetween(1, 5),
        'price' => $faker->numberBetween(10000, 100000),
        'desc' => $faker->paragraph($nbSentences = 2, $variabelNbSentences = true),
        'image' => '/images/product.jpg'
    ];
});
