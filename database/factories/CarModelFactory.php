<?php

use Faker\Generator as Faker;
use App\Cars\CarMake;

$factory->define(App\Cars\CarModel::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    return [
        'name'          => $faker->vehicleModel,
        'id_car_make'   => function() {
            return CarMake::inRandomOrder()->first()->id_car_make;
        }
    ];
});