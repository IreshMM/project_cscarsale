<?php

use Illuminate\Database\Seeder;
use App\Cars\CarMake;
use App\Cars\CarModel;

class CarModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $models = [
            [
                '4Runner',
                'Allion',
                'Alphard',
                'Aqua Hybrid',
                'Auris',
                'Avanza',
                'Axio',
                'Corolla',
                'Camry'
            ],
            [
                '1200',
                'AD-Wagon',
                'Bluebird',
                'Caravan',
                'Cefiro',
                'Civilian',
                'Datsun'
            ],
            [
                '3000GT',
                'ASX',
                'Attrage',
                'Canter',
                'Chariot',
                'Delica',
                'Eclipse',
                'EK',
                'Evolution',
                'Fuso'
            ],
            [
                'Grace Hybrid',
                'Accord',
                'Accord Euro',
                'Activa',
                'Acty',
                'Airwave',
                'CB400',
                'Civic'
            ],
            [
                'A-Star',
                'Aerio',
                'Alto',
                'Baleno',
                'Bandit',
                'Carry',
                'Celerio',
                'Every',
                'Grand Vitara'
            ]
        ];

        $i = 1;
        foreach ($models as $modelGroup) {
            foreach ($modelGroup as $model) {
                CarModel::create([
                    'name' => $model,
                    'id_car_make' => $i,
                    'body_type' => ['Sedan', 'Mini Car', 'Mini Van', 'Wagon', 'Van', 'Truck'][random_int(0, 5)]
                ]);
            }
            $i++;
        }
    }
}