<?php

use App\Models\Solution;
use App\Models\Exercise;
use App\Models\User;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Solution::class, function (Faker $faker) {
    return [
        'exercise_id' => factory(Exercise::class)->create()->id,
        'user_id' => factory(User::class)->create()->id,
        'content' => $faker->text,
    ];
});
