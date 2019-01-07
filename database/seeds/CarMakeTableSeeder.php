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
        factory(App\Cars\CarMake::class, 3)->create();
    }
}
