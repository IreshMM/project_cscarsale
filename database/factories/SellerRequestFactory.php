<?php

use Faker\Generator as Faker;
use App\Cars\CarModel;
use App\User;

$factory->define(App\Cars\SellerRequest::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    return [
        'condition'             => ['Brand New', 'Used', 'Reconditioned'][random_int(0, 2)],
        'mileage'               => random_int(12000, 100000),
        'color'                 => $faker->colorName,
        'seller_description'    => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'year'                  => $faker->biasedNumberBetween(1998,2018, 'sqrt'),
        'images'                => 5,
        'city'                  => $faker->city,
        'status'                => ['Approved', 'Denied', 'Pending'][random_int(0, 2)],
        'id_car_model'          => function() {
            return CarModel::inRandomOrder()->first()->id_car_model;
        },
        'id_seller'             => function() {
            return User::where('level', 'seller')->inRandomOrder()->first()->id;
        }
    ];
});
