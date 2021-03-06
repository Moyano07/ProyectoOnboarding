<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Publication;
use Faker\Generator as Faker;

$factory->define(Publication::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'content' =>$faker->text,
        'user_id' =>1
    ];
});
