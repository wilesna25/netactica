<?php

use Faker\Generator as Faker;

$factory->define(App\Type::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->realText(random_int(80,160)),
    ];
});
