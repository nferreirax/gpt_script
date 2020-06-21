<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CreditDebitManually;
use Faker\Generator as Faker;

$factory->define(CreditDebitManually::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'amount' => $faker->randomDigitNotNull,
        'description' => $faker->text,
        'admin_notes' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
