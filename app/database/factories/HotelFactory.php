<?php

use Faker\Generator as Faker;

$factory->define(App\Hotel::class, function (Faker $faker) {
    return [
        
        'name' => $faker->company,
        'description' => $faker->realText(random_int(40,160)),
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'photo' =>  $faker->imageUrl(600,338),
    ];
});
