<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $amount = $faker->randomFloat(2, 1, 10000);
    return [
        'user_id' => rand(1,500),
        'pay_source' => $faker->randomElement(array('pay_pal', 'credit_card', 'atm')),
        'status' => $faker->randomElement(array('created', 'done', 'canceled')),
        'subtotal' => $amount,
        'total' =>$amount
    ];
});
