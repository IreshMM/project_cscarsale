<?php

use Faker\Generator as Faker;

use App\User;

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'dob' => $faker->biasedNumberBetween(1973, 2000),
        'gender' => ["Male", "Female"][random_int(0, 1)],
        'nic' => '12454124v',
        'land_line' => $faker->phoneNumber,
        'bank_account' => 5412155,
        'branch' => 'Anuradhapura',
        'position' => 'Supervisor',
        'hired_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'id' => function() {
            return User::where('level', 'employee')->inRandomOrder()->first()->id;
        }
    ];
});
