<?php

use Faker\Generator as Faker;

$factory->define(App\Customers\Buyer::class, function (Faker $faker) {
    return [
        'title'             => $faker->title,
        'first_name'        => $faker->firstName,
        'last_name'         => $faker->lastName,
        'street_address'    => $faker->streetAddress,
        'city'              => $faker->city,
        'email'             => $faker->freeEmail,
    ];
});
