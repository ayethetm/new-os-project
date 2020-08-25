<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subcategory;
use Faker\Generator as Faker;

$factory->define(Subcategory::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
       	'category_id' => random_int(\DB::table('categories')->min('id'),\DB::table('categories')->max('id')),
    ];
});
