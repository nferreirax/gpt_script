<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AchievementLog;
use Faker\Generator as Faker;

$factory->define(AchievementLog::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'level_id' => $faker->randomDigitNotNull,
        'offers' => $faker->randomDigitNotNull,
        'points' => $faker->randomDigitNotNull,
        'bonus_credited' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
