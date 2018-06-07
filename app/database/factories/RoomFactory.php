<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'priceNigth' => $faker->numberBetween(30999,500000),
        'description' => $faker->realText(random_int(40,160)),
        'photo' =>  $faker->imageUrl(600,338),
        'type_id' =>  $faker->numberBetween(1,3),
    ];
});
