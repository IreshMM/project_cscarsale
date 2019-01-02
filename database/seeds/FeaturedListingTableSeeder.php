<?php

use Illuminate\Database\Seeder;

class FeaturedListingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            factory(App\WebSite\FeaturedListing::class, 1)->create(['id_car_listing' => $i + 1]);
        }
    }
}
