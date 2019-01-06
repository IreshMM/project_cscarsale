<?php

use Illuminate\Database\Seeder;
use App\Cars\CarMake;

class CarMakeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Read input data file
        $data = new SplFileObject(getcwd() . "/database/seeds" . "/data/carmake.csv");

        $dataArray = array();

        while(!$data->eof()) {
            $dataArray[] = $data->fgets();
        }

        $data = null;

        foreach ($dataArray as $value) {
            $values = explode(",", $value);
            $carMake = new CarMake(['id_car_make' => trim($values[0]), 'name' => trim($values[1])]);
            $carMake->save();
        }
    }
}
