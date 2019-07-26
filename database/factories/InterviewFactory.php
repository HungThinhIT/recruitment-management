<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Interview;
use Faker\Generator as Faker;

$factory->define(Interview::class, function (Faker $faker) {
    return [
        'name'		=>$faker->name,
        'timeStart'	=>$faker->dateTimeThisMonth($min = 'now'), 
        'timeEnd'	=>$faker->dateTimeThisMonth($min = 'now'), 
        'address'	=>$faker->address
        ];
});
