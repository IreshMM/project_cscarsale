<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSpecificationValueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Read input data file
        $data = new SplFileObject(getcwd() . "/database/seeds" . "/data/carspecificationvalue.csv");

        $dataArray = array();

        while(!$data->eof()) {
            $dataArray[] = $data->fgets();
        }

        $data = null;

        foreach ($dataArray as $value) {
            $values = explode(",", $value);
            DB::table('car_specification_value')->insert([
               'id_car_model' => trim($values[0]),
               'id_car_specification' => trim($values[1]),
               'value' => trim($values[2]),
               'unit' => trim($values[3])
            ]);
        }
    }
}
