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
        // $data = new SplFileObject(getcwd() . "/database/seeds" . "/data/carspecificationtype.csv");

        // $dataArray = array();

        // while(!$data->eof()) {
        //     $dataArray[] = $data->fgets();
        // }

        // $data = null;

        // foreach ($dataArray as $value) {
        //     $specType = new CarSpecificationType(['name' => trim($value)]);
        //     $specType->save();
        // }

        //Manually inserting
        $types = ['Details', 'Features'];

        foreach ($types as $value) {
            CarSpecificationType::create([
                'name' => $value
            ]);
        }
    }
}
