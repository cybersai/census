<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bio;
use App\User;
use Faker\Generator as Faker;

$factory->define(Bio::class, function (Faker $faker) {
    return [
        'date_of_birth' => $faker->date(),
        'sex' => $faker->randomElement(['male', 'female']),
        'marital_status' => $faker->randomElement(['single', 'married', 'divorced', 'widowed']),
        'residence' => $faker->streetAddress,
        'user_id' => factory(User::class)->create()->id
    ];
});
