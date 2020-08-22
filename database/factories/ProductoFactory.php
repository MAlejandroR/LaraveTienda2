<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    $faker->locale("es_ES");
    return [
        //
        'nombre' => $faker->name(),
        'descripcion' => $faker->paragraph,
        'imagen' => $faker->randomElement(['img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg']),
        'PVP' => $faker->randomNumber(5)
];
});
