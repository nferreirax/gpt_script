<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {

    return [
        'sender_id' => $faker->randomDigitNotNull,
        'receiver_id' => $faker->randomDigitNotNull,
        'related_message' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'email' => $faker->word,
        'ip' => $faker->word,
        'subject' => $faker->word,
        'message' => $faker->text,
        'read' => $faker->word,
        'read_date' => $faker->date('Y-m-d H:i:s'),
        'deleted_inbox' => $faker->word,
        'deleted_sent' => $faker->word,
        'is_support' => $faker->word,
        'is_answer' => $faker->word,
        'is_archived' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
