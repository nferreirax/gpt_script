<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UsersLoginLog;
use Faker\Generator as Faker;

$factory->define(UsersLoginLog::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'username' => $faker->word,
        'password' => $faker->word,
        'ip' => $faker->word,
        'client' => $faker->word,
        'os' => $faker->word,
        'device' => $faker->word,
        'brand' => $faker->word,
        'model' => $faker->word,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
