<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UsersAchievement;
use Faker\Generator as Faker;

$factory->define(UsersAchievement::class, function (Faker $faker) {

    return [
        'offers' => $faker->randomDigitNotNull,
        'offers_last_month' => $faker->randomDigitNotNull,
        'points' => $faker->word,
        'points_last_month' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
