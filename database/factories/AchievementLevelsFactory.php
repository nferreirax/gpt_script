<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AchievementLevels;
use Faker\Generator as Faker;

$factory->define(AchievementLevels::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'badge' => $faker->word,
        'min_offers' => $faker->randomDigitNotNull,
        'min_points' => $faker->randomDigitNotNull,
        'bonus_fixed' => $faker->randomDigitNotNull,
        'bonus_percentage' => $faker->randomDigitNotNull,
        'bonus_next_month' => $faker->randomDigitNotNull,
        'level' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
