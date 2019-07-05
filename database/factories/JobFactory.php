<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'technicalSkill' => 'JAVA - 5,PHP-4',
        'level' => $faker->numberBetween($min = 1, $max = 3)
    ];
});
