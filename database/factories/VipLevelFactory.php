<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\VipLevel;
use Faker\Generator as Faker;

$factory->define(VipLevel::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'privmessage' => $faker->randomDigitNotNull,
        'auto_min_reg_time' => $faker->randomDigitNotNull,
        'auto_points_hold_over' => $faker->randomDigitNotNull,
        'auto_points_hold_days' => $faker->randomDigitNotNull,
        'auto_min_earnings' => $faker->randomDigitNotNull,
        'auto_max_earnings' => $faker->randomDigitNotNull,
        'min_cashout' => $faker->randomDigitNotNull,
        'badge' => $faker->word,
        'avatar' => $faker->word,
        'level' => $faker->word,
        'ref_commissions' => $faker->randomDigitNotNull,
        'store_pp_max_24' => $faker->randomDigitNotNull,
        'store_coupons_max_24' => $faker->randomDigitNotNull,
        'enabled' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
