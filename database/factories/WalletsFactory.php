<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Wallets;
use Faker\Generator as Faker;

$factory->define(Wallets::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'symbol' => $faker->word,
        'sufix' => $faker->word,
        'prefix' => $faker->word,
        'sort' => $faker->word,
        'allow_deposits' => $faker->word,
        'active' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
