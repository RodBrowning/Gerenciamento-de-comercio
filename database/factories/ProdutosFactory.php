<?php

use Faker\Generator as Faker;


$factory->define(App\Produto::class, function (Faker $faker) {
    return [
        'name' 			=> $faker->word,
        'marca' 		=> $faker->word,
        'categoria_id' 	=> $faker->numberBetween(4,8),	
        'descricao'		=> $faker->realText(15, 5)
    ];
});
