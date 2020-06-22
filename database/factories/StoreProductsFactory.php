<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\StoreProducts;
use Faker\Generator as Faker;

$factory->define(StoreProducts::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'price' => $faker->randomDigitNotNull,
        'price_discount' => $faker->randomDigitNotNull,
        'price_discount_reason' => $faker->word,
        'value' => $faker->randomDigitNotNull,
        'cat_id' => $faker->randomDigitNotNull,
        'notify_admin' => $faker->word,
        'asset' => $faker->word,
        'image_path' => $faker->word,
        'qtd_available' => $faker->randomDigitNotNull,
        'active' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
