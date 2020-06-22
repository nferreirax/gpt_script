<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\offersHistory;
use Faker\Generator as Faker;

$factory->define(offersHistory::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'network_id' => $faker->randomDigitNotNull,
        'credits' => $faker->randomDigitNotNull,
        'credit_type' => $faker->word,
        'txd' => $faker->word,
        'credited' => $faker->word,
        'offer_id' => $faker->randomDigitNotNull,
        'offer_name' => $faker->word,
        'date_credited' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
