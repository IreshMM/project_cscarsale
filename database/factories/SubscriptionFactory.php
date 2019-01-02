<?php

use Faker\Generator as Faker;
use App\Cars\CarModel;

$factory->define(App\Customers\Subscription::class, function (Faker $faker) {
    return [
        'name'          => $faker->name,
        'email'         => $faker->email,
        'id_car_model'  => function() {
            return CarModel::inRandomOrder()->first()->id_car_model;
        }
    ];
});
