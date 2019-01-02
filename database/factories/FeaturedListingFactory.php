<?php

use Faker\Generator as Faker;
use App\Cars\CarListing;

$factory->define(App\WebSite\FeaturedListing::class, function (Faker $faker) {
    return [
        'id_car_listing' => function() {
            return CarListing::inRandomOrder()->first()->id_car_listing;
        }
    ];
});
