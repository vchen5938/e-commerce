<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Item::class, function (Faker $faker) {
    $timestamp = Carbon::now()->addDays(rand(-365,365));
    return [
        'name' => $faker->name(),
        'cgy_id' => rand(1,500),
        'url' => $faker->url(),
        'customer_reviews' => $faker->numberBetween($min = 0, $max = 5),
        'num_customer_ratings' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'cover_image' => $faker->imageUrl($width = 640, $height = 480),
        'product_description' => $faker->paragraphs($nbSentences = 1, $variableNbSentences = true),
        'product_information' => $faker->paragraphs($nbSentences = 1, $variableNbSentences = true),
        'product_videos' => $faker->imageUrl($width = 640, $height = 480),
        'product_images' => $faker->imageUrl($width = 640, $height = 480),
        'qna' => $faker->paragraphs($nbSentences = 1, $variableNbSentences = true),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 3000),
        'brand' => $faker->company(),
        'enabled'=> rand(0,1),
        'sort'=> rand(0,20),
        'created_at' => $timestamp,
        'updated_at' => $timestamp,
        'sell_at' => $timestamp
    ];
});
