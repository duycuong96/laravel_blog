<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence(),
        'content' => $faker->paragraph(5),
        'post_id' =>  $faker->randomDigit,
        'user_id' => $faker->randomDigit,
        'is_active' => 0,
    ];
});
