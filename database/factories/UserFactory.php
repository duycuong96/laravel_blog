<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt(123456),
        'avatar' => $faker->imageUrl($width = 640, $height = 480),
        'phone' => 0,
        'is_active' => 0,
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});
