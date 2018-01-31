<?php

use Faker\Generator as Faker;

$factory->define(App\Publisher::class, function (Faker $faker) {
    return [
        //protected $fillable = ['name','inn','chief','address'];
			'name' => $faker->company,
			'inn' => $faker->numerify('##########'),
			'chief' => $faker->name,
			'address' => $faker->address,
    ];
});
