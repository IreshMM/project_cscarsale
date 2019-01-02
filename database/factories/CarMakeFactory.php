<?php

use Faker\Generator as Faker;

$factory->define(App\Cars\CarMake::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $faker->seed(1234);
    return [
        'name' => $faker->unique()->vehicleBrand
    ];
});
