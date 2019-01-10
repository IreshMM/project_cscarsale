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
        // $data = new SplFileObject(getcwd() . "/database/seeds" . "/data/carspecifications.csv");

        // $dataArray = array();

        // while(!$data->eof()) {
        //     $dataArray[] = $data->fgets();
        // }

        // $data = null;

        // foreach ($dataArray as $value) {
        //     $values = explode(",", $value);

        //     $spec = new CarSpecification(['name' => trim($values[1]), 'id_car_specification_type' => $values[0]]);
        //     $spec->save();
        // }

        $specificationsDetails = [
            'Fuel type',
            'Engine Size',
            'Transmission'
        ];

        foreach ($specificationsDetails as $value) {
            CarSpecification::create([
                'name' => $value,
                'id_car_specification_type' => 1
            ]);
        }

        $specficationsFeatures = [
            'A/C: Front',
            'Cruise Control',
            'Power Locks',
            'Remote Keyless Entry',
            'Airbag: Driver',
            'Airbag: Side',
            'Power Windows',
            'Rear Window Wiper',
            'CD',
            'Tow Package',
            'A/C: Rear',
            'Navigation System',
            'Power Steering',
            'Multifunction Steering',
            'Airbag: Passenger',
            'Anti-Lock Brakes',
            'Rear Window Defroster',
            'Tinted Glass',
            'USB'
        ];

        foreach ($specficationsFeatures as $value) {
            CarSpecification::create([
                'name' => $value,
                'id_car_specification_type' => 2
            ]);
        }
    }
}
