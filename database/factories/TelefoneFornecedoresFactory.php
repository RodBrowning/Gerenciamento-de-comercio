<?php

use Faker\Generator as Faker;
use Faker\Provider\pt_BR\PhoneNumber as Telefone;

$factory->define(App\Fornecedor\Telefone::class, function (Faker $faker) {

	$faker->addProvider(new Telefone($faker));

    return [

        'fornecedor_id'		=> $faker->numberBetween(1,28),
        'numero_telefone'	=> $faker->phone(false)
        
    ];
});
