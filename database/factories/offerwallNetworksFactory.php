<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\offerwallNetworks;
use Faker\Generator as Faker;

$factory->define(offerwallNetworks::class, function (Faker $faker) {

    return [
        'enabled' => $faker->word,
        'enabled_postback' => $faker->word,
        'name' => $faker->word,
        'url' => $faker->text,
        'logo_image' => $faker->word,
        'iframe_id' => $faker->word,
        'iframe_key' => $faker->word,
        'iframe_url' => $faker->text,
        'postback_ips' => $faker->text,
        'credit_wallet' => $faker->randomDigitNotNull,
        'credit_multiplier' => $faker->randomDigitNotNull,
        'order' => $faker->word,
        'payment_hold' => $faker->randomDigitNotNull,
        'payment_hold_over' => $faker->randomDigitNotNull,
        'ref_commissions' => $faker->randomDigitNotNull,
        'show_offerwalls' => $faker->word,
        'show_earn_passive' => $faker->word,
        'show_earn_surveys' => $faker->word,
        'show_earn_offerwalls' => $faker->word,
        'category' => $faker->word,
        'postback_method' => $faker->word,
        'postback_tid' => $faker->word,
        'postback_rate' => $faker->word,
        'postback_subid' => $faker->word,
        'postback_status' => $faker->word,
        'postback_value_reverse' => $faker->word,
        'postback_value_credit' => $faker->word,
        'postback_success' => $faker->word,
        'postback_error' => $faker->word,
        'postback_cname' => $faker->word,
        'postback_cid' => $faker->word,
        'postback_reversal_reason' => $faker->word,
        'postback_filter_duplicates' => $faker->word,
        'postback_signature' => $faker->word,
        'postback_signature_encryption' => $faker->word,
        'postback_signature_built' => $faker->word,
        'postback_url' => $faker->text,
        'postback_password' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
