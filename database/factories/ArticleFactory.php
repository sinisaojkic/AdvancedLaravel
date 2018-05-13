<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'title' => $faker->sentence,
        'body' => $faker->paragraph(random_int(5,10))
    ];
});
