<?php

use Illuminate\Database\Seeder;
use App\Cars\CarListing;
use App\Cars\CarModel;

class CarListingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carModels = CarModel::all();
        $carModelsArray = array();

        foreach ($carModels as $value) {
            $carModelsArray[] = $value;
        }

        $conditions = ['Used', 'New', 'Reconditioned'];
        $colors = ['Red', 'Green', 'Blue', 'Cyan', 'Black'];
        $cities = ['Anuradhapura', 'Galle', 'Colombo'];

        // $data = file_get_contents(getcwd() . "/database/seeds" . "/data/carlisting.csv");
        
        // $dataArray = explode(";", $data);
        for ($i = 0; $i < 20; $i++) {
            // $values = explode("~", $line);

            $listing = new CarListing([
                'condition' => $conditions[array_rand($conditions)],
                'seller_description' => file_get_contents('http://loripsum.net/api'),
                'color' => $colors[array_rand($colors)],
                'mileage' => rand(10000, 1000000),
                'year' => rand(1996, 2018),
                'images' => 5,
                'city' => $cities[array_rand($cities)]
            ]);

            $listing->model()->associate($carModelsArray[array_rand($carModelsArray)]);

            $listing->save();
        }

    }
}
