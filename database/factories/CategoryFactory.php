<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'description' => $faker->paragraph(5),
        'image' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
