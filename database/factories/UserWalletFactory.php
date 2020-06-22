<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserWallet;
use Faker\Generator as Faker;

$factory->define(UserWallet::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'wallet_id' => $faker->randomDigitNotNull,
        'amount' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
