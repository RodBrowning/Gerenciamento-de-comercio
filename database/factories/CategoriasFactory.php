<?php

use Faker\Generator as Faker;


$factory->define(App\Produtos\Categoria::class, function (Faker $faker) {
    return [
        'categoria' 			=> $faker->word,
        'ativa'			=> $faker->boolean(80)
    ];
});
