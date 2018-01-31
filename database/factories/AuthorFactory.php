<?php

use Faker\Generator as Faker;
//echo 'autherfctory';
$factory->define(App\Author::class, function (Faker $faker) {
    return [
        //protected $fillable = ['name','inn','address'];
		'name' => $faker->name,
		'inn' => $faker->numerify('############'),
		'address' => $faker->address

    ];
});
