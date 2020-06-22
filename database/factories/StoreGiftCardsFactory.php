<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\StoreGiftCards;
use Faker\Generator as Faker;

$factory->define(StoreGiftCards::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'product_id' => $faker->randomDigitNotNull,
        'value' => $faker->randomDigitNotNull,
        'link' => $faker->word,
        'active' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
