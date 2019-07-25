<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'name' 			=> $faker->name,
        'description' 	=> $faker->text,
        'address' 		=> $faker->address,
        'position' 		=> 'Tester',
        'category'      => 'Engineer',
        'salary'   		=> '500$ - 600$',
        'status'		=> 'Full-time',
        'experience'	=> '2',
        'amount' 		=> $faker->numberBetween($min = 10, $max = 30),
        'publishedOn'	=> $faker->dateTimeThisMonth($min = 'now'),
        'deadline'		=> $faker->dateTimeThisMonth($min = 'now'),
    ];
});
