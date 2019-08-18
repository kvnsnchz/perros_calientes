<?php
use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'cedula'    =>  $faker->numberBetween(15000000, 35000000),
        'nombre'    =>  $faker->name,
    ];
});
