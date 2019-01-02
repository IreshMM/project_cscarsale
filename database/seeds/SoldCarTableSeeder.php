<?php

use Illuminate\Database\Seeder;

class SoldCarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cars\SoldCar::class, 10)->create();
    }
}
