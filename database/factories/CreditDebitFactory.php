<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CreditDebit;
use Faker\Generator as Faker;

$factory->define(CreditDebit::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'points' => $faker->randomDigitNotNull,
        'type' => $faker->randomDigitNotNull,
        'related_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
