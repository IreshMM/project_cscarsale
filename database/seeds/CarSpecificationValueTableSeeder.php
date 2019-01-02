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
        $carSpecifications = CarSpecification::all();

        foreach ($carModels as $carModel) {
            foreach ($carSpecifications as $carSpecification) {
                $carModel->specifications()->attach($carSpecification->id_car_specification, ['value' => 'True', 'unit' => 'Boolean']);
            }
        }
    }
}