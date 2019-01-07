<?php

use Illuminate\Database\Seeder;
use App\Cars\CarMake;
use App\Cars\CarModel;

class CarModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cars\CarModel::class, 20)->create();
    }
}
