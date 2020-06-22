<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\offersLog;
use Faker\Generator as Faker;

$factory->define(offersLog::class, function (Faker $faker) {

    return [
        'network_id' => $faker->randomDigitNotNull,
        'network_type' => $faker->randomDigitNotNull,
        'transaction_id' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'offer_id' => $faker->word,
        'message' => $faker->text,
        'ip' => $faker->word,
        'full_call' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
