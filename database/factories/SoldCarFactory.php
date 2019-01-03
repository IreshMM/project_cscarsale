<?php

use Faker\Generator as Faker;
use App\Customers\Buyer;
use App\Cars\CarModel;
use App\User;

$factory->define(App\Cars\SoldCar::class, function (Faker $faker) {
    return [
        'condition'             => ['Brand New', 'Used'][random_int(0, 1)],
        'mileage'               => random_int(12000, 100000),
        'color'                 => $faker->colorName,
        'seller_description'    => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'year'                  => $faker->biasedNumberBetween(1998,2018, 'sqrt'),
        'images'                => 5,
        'city'                  => $faker->city,
        'date'                  => $faker->date($format = 'Y-m-d', $max = 'now'),
        'id_buyer'              => function() {
            return Buyer::inRandomOrder()->first()->id;
        },
        'id_seller'             => function() {
            return User::where('level', 'seller')->inRandomOrder()->first()->id;
        },
        'id_car_model'              => function() {
            return CarModel::inRandomOrder()->first()->id_car_model;
        }
    ];
});
