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
        $data = new SplFileObject(getcwd() . "/database/seeds" . "/data/car_make.txt");

        $carMakes = array();

        while(!$data->eof()) {
            $carMakes[] = $data->fgets();
        }

        $data = null;

        foreach ($carMakes as $value) {
            $carMake = new CarMake(['name' => $value]);
            $carMake->save();
        }

    }
}
