<?php

use Illuminate\Database\Seeder;
use App\Cars\CarSpecificationType;

class CarSpecificationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Read input data file
        $data = new SplFileObject(getcwd() . "/database/seeds" . "/data/carspecificationtype.csv");

        $dataArray = array();

        while(!$data->eof()) {
            $dataArray[] = $data->fgets();
        }

        $data = null;

        foreach ($dataArray as $value) {
            $values = explode(",", $value);
            $specType = new CarSpecificationType(['id_car_specification_type' => trim($values[0]), 'name' => trim($values[1])]);
            $specType->save();
        }
    }
}
