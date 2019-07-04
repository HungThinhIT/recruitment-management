<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Candidate;
use Faker\Generator as Faker;

$factory->define(Candidate::class, function (Faker $faker) {
    return [
        'fullname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone'=>$faker->phoneNumber,
        'address'=>$faker->address,
        'CV'=>Str::random(5).'.pdf',
        'technicalSkill' => 'JAVA - 5,PHP-4',
        'description'=>$faker->text,
        'status'=>$faker->numberBetween($min = 1, $max = 3)
    ];
});
