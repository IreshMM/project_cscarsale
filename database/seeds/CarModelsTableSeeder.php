<?php

use Illuminate\Database\Seeder;
use App\Cars\CarMake;
use App\Cars\CarModel;

class CarModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Read input data file
        $data = new SplFileObject(getcwd() . "/database/seeds" . "/data/carmodel.csv");

        $dataArray = array();
        
        while (!$data->eof()) {
            $dataArray[] = $data->fgets();
        }
        
        $data = null;
        
        foreach ($dataArray as $value) {
            $values = explode(",", $value);
            $make = CarMake::find($values[0]);
            $model = new CarModel(['name' => $values[1], 'id_car_model' => $values[2]]);
            $model->make()->associate($make);
            $model->save();
        }
    }
}
