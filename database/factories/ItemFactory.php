<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'codeno' => $faker->name,
        'name' =>$faker->name,
        'photo' => $faker->text,
        'price' => $faker->randomNumber(4),
        'discount' =>$faker->randomNumber(1),
        'description'=>$faker->text,
       	'brand_id' => random_int(\DB::table('brands')->min('id'),\DB::table('brands')->max('id')),
       	'subcategory_id' => random_int(\DB::table('subcategories')->min('id'),\DB::table('subcategories')->max('id')),
    ];
});
