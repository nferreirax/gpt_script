<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\StoreOrdersCrypto;
use Faker\Generator as Faker;

$factory->define(StoreOrdersCrypto::class, function (Faker $faker) {

    return [
        'order_id' => $faker->randomDigitNotNull,
        'crypto_value' => $faker->randomDigitNotNull,
        'crypto_send' => $faker->randomDigitNotNull,
        'coin' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
