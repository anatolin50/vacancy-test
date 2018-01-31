<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
	return [
	//protected $fillable = ['title', 'price', 'abstract'];
		'title' => $faker->text(30),
		'price' => $faker->randomFloat(2,100,1000),
		'abstract' => $faker->text(200),
		//одновременно заполняем и таблицу авторов - factory(App\Author::class)->create()
		'author_id' => function () {
			return factory(App\Author::class)->create()->id;
			}
	];
});
