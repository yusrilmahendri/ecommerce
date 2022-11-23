<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TransactionDetail;
use Faker\Generator as Faker;

$factory->define(TransactionDetail::class, function (Faker $faker) {
    return [
      'transaction_id' => $faker->numberBetween(1, 5),
      'product_id' => $faker->numberBetween(1, 5),
    ];
});
