<?php

use Faker\Generator as Faker;
use App\Cars\CarModel;
use App\User;

$factory->define(App\Cars\CarListing::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $buyingPrice = random_int(1000000, 10000000);
    return [
        'condition'             => ['Brand New', 'Used', 'Reconditioned'][random_int(0, 2)],
        'mileage'               => random_int(12000, 100000),
        'color'                 => $faker->colorName,
        'seller_description'    => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'year'                  => $faker->biasedNumberBetween(1998,2018, 'sqrt'),
        'images'                => 5,
        'buying_price'          => $buyingPrice,
        'selling_price'         => $buyingPrice + random_int(1000, 100000),
        'city'                  => ['Galle', 'Anuradhapura', 'Colombo'][random_int(0, 2)],
        'id_car_model'          => [21, 22, 23][random_int(0, 2)],
        'id_seller'             => function() {
            return User::where('level', 'seller')->inRandomOrder()->first()->id;
        }
    ];
});