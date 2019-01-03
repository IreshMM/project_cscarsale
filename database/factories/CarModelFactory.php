<?php

use Faker\Generator as Faker;
use App\Cars\CarMake;

$factory->define(App\Cars\CarModel::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    return [
        'name'          => $faker->vehicleModel,
        'body_type'     => ['Sedan', 'Mini Car', 'Min Van', 'Wagon', 'Van', 'Truck'][random_int(0, 5)],
        'id_car_make'   => function() {
            return CarMake::inRandomOrder()->first()->id_car_make;
        }
    ];
});