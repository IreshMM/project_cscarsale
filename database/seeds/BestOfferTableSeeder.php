<?php

use Illuminate\Database\Seeder;

class BestOfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\WebSite\BestOffer::class, 1)->create(['id_car_listing' => 1]);
        factory(App\WebSite\BestOffer::class, 1)->create(['id_car_listing' => 2]);
        factory(App\WebSite\BestOffer::class, 1)->create(['id_car_listing' => 3]);
        factory(App\WebSite\BestOffer::class, 1)->create(['id_car_listing' => 4]);
        factory(App\WebSite\BestOffer::class, 1)->create(['id_car_listing' => 5]);
    }
}
