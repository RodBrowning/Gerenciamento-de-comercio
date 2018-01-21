<?php

use Faker\Generator as Faker;

$factory->define(App\Fornecedor\Fornecedor::class, function (Faker $faker) {

    return [
        'name' => $faker->company	
    ];
});
