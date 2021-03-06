<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('admin'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Item::class, function (Faker\Generator $faker) {
    return [        
        'title' => $faker->word,
        'content' => $faker->paragraph,
        'price' => $faker->numberBetween(1000000,100000000),
    ];
});


$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'price' => $faker->numberBetween(1000000,100000000),        
    ];
});
