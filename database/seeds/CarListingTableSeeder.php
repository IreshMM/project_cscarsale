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
        factory(App\Cars\CarListing::class, 50)->create();
    }
}