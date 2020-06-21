<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {

    return [
        'session_id' => $faker->word,
        'username' => $faker->word,
        'password' => $faker->word,
        'name_first' => $faker->word,
        'name_last' => $faker->word,
        'avatar' => $faker->word,
        'active' => $faker->word,
        'last_login_timestamp' => $faker->word,
        'failed_logins' => $faker->word,
        'last_failed_login' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
