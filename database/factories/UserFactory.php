<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $timestamp = Carbon::now()->addDays(rand(-365,365));
    return [
        'name' => $faker->name(),
        'username' => $faker->name(),
        'age' => rand(18, 80),
        'address' => $faker->address(),
        'email' => $faker->unique()->email(),
        'phone_number' => $faker->unique()->phoneNumber(),
        'password' => bcrypt( $faker->password() ),
        'country_region' => $faker->country(),
        'profile_pic' => $faker->imageUrl($width = 640, $height = 480),
        'url' => $faker->url(),
        'created_at' => $timestamp,
        'updated_at' => $timestamp
    ];
});
