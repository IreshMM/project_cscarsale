<?php

use Illuminate\Database\Seeder;
use App\Cars\CarSpecificationType;
use App\Cars\CarSpecification;

class CarSpecificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Read input data file
        $data = new SplFileObject(getcwd() . "/database/seeds" . "/data/carspecification.csv");

        $dataArray = array();

        while(!$data->eof()) {
            $dataArray[] = $data->fgets();
        }

        $data = null;

        foreach ($dataArray as $value) {
            $values = explode(",", $value);
            $specType = CarSpecificationType::find(1);

            $spec = new CarSpecification(['id_car_specification' => trim($values[0]), 'name' => trim($values[1])]);
            $spec->specificationType()->associate($specType);
            $spec->save();
        }
    }
}
