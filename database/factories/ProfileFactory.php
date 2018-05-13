<?php

use Faker\Generator as Faker;


$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'city' => $faker->city,
        'about' => $faker->paragraph(random_int(5,10))
    ];
});
