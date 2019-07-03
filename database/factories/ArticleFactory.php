<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'image'=>Str::random(5).'.png',
        'content'=>$faker->text,
        'jobId'=>App\Job::all()->random()->id,
        'userId'=>App\User::all()->random()->id,
        'catId'=>App\Category::all()->random()->id
        ];
});
