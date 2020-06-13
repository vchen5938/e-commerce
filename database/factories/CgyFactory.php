<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cgy;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Cgy::class, function (Faker $faker) {
    $timestamp = Carbon::now()->addDays(rand(-365,365));
    return [
        'name' => $faker->name(),
        'enabled' => $faker->boolean($chanceOfGettingTrue = 50),
        'created_at' => $timestamp,
        'updated_at' => $timestamp
    ];
});
