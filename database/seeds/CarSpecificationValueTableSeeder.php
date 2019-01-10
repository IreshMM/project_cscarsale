<?php

use Illuminate\Database\Seeder;
use App\Cars\CarModel;
use App\Cars\CarSpecification;

class CarSpecificationValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carModels = CarModel::all();
        $carSpecificationDetails = CarSpecification::where('id_car_specification_type', 1)->get();
        $carSpecificationFeatures = CarSpecification::where('id_car_specification_type', 2)->get();

        $detailsValues = [
            ['Electric', 'Diesel', 'Petrol'],
            ['70 cc', '100 cc', '120 cc'],
            ['Automatic', 'Manual', 'Manual']
        ];

        foreach ($carModels as $carModel) {
            $i = 0;
            foreach ($carSpecificationDetails as $carSpecification) {
                $carModel->specifications()->attach($carSpecification
                ->id_car_specification, ['value' => $detailsValues[$i++][random_int(0, 2)], 'unit' => 'NULL']);
            }

            foreach ($carSpecificationFeatures as $carSpecification) {
                $carModel->specifications()->attach($carSpecification
                ->id_car_specification, ['value' => ['True', 'False'][random_int(0, 1)], 'unit' => 'NULL']);
            }
        }
    }
}