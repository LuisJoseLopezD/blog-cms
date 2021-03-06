<?php

use Faker\Generator as Faker;

// aquí debemos definir con qué modelos trabajamos

$factory->define(App\Category::class, function (Faker $faker) {
    
	$title = $faker->sentence(4);
    return [
        'name' => $title, 
        'slug' => str_slug($title),
        'body' => $faker->text(500),
    ];
});
