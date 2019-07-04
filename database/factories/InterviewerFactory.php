<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Interviewer;
use Faker\Generator as Faker;

$factory->define(Interviewer::class, function (Faker $faker) {
    return [
        'fullname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone'=>$faker->phoneNumber,
        'address'=>$faker->address,
        'image'=>Str::random(5).'.png',
        'technicalSkill' => 'JAVA - 5,PHP-4'
        ];
});
