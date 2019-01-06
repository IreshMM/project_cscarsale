<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CarMakeTableSeeder::class);
        $this->call(CarModelTableSeeder::class);
        $this->call(CarSpecificationTypeTableSeeder::class);
        $this->call(CarSpecificationTableSeeder::class);
        $this->call(CarSpecificationValueTableSeeder::class);
        $this->call(CarListingTableSeeder::class);
    }
}
