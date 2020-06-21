<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AdminLoginLog;
use Faker\Generator as Faker;

$factory->define(AdminLoginLog::class, function (Faker $faker) {

    return [
        'admin_id' => $faker->randomDigitNotNull,
        'username' => $faker->word,
        'ip' => $faker->randomDigitNotNull,
        'pass' => $faker->word,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
