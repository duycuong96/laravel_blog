<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence(),
        'content' => $faker->paragraph(5),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'like' => 0,
        'category_id' =>  $faker->randomDigit,
        'user_id' => $faker->randomDigit,
    ];
});
