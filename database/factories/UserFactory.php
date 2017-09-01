<?php

use Faker\Generator as Faker;

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

$factory->define(Sipi\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Sipi\Posts::class, function (Faker $faker) {

    return [
        'short'  => $faker->sentence(1),
        'long'   => $faker->text(110),
        'content'  => $faker->text(900),
        'autor' => '1',
        'img' => 'asdsa',
    ];
});