<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'photo' => 'categoryimg/' . $faker->image('public/images/categoryimg',400,300, null, false),
    ];
});
