<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ItemOrder;
use Faker\Generator as Faker;

$factory->define(ItemOrder::class, function (Faker $faker) {
    return [
        'item_id' =>rand(1, 100),
        'order_id' =>rand(1, 100),
        'qty' => $faker->numberBetween($min = 1, $max = 5),
        'description' => $faker-> paragraphs($nbSentences = 3, $variableNbSentences = true)
    ];
});
