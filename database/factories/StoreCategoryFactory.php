<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\StoreCategory;
use Faker\Generator as Faker;

$factory->define(StoreCategory::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'order' => $faker->word,
        'img' => $faker->word,
        'active' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
