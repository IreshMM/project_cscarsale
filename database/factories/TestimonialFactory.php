<?php

use Faker\Generator as Faker;
use App\Customers\Buyer;
use App\User;

$factory->define(App\WebSite\Testimonial::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->realText($maxNbChars = 100, $indexSize = 1),
        'id_buyer' => function() {
            return Buyer::inRandomOrder()->first()->id;
        },
        'id_seller' => function() {
            return User::where('level', 'seller')->inRandomOrder()->first()->id;
        }
    ];
});
