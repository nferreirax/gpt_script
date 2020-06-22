<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\StoreOrders;
use Faker\Generator as Faker;

$factory->define(StoreOrders::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'product_id' => $faker->randomDigitNotNull,
        'card_id' => $faker->randomDigitNotNull,
        'price' => $faker->randomDigitNotNull,
        'value' => $faker->randomDigitNotNull,
        'ip' => $faker->word,
        'status' => $faker->word,
        'date_processed' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
