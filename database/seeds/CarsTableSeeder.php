<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'title' => 'Audi S Coupe',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'make' => 'Audi',
                'model' => 'Coupe',
                'type' => 'Sedan',
                'status' => 'Used',
                'year' => 2006,
                'thumbnail' => '1154841',
                'price' => rand(99999, 200000)
            ],
            [
                'title' => 'Range Rover Discovery',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'make' => 'Audi',
                'model' => 'Coupe',
                'type' => 'Sedan',
                'status' => 'Used',
                'year' => 2006,
                'thumbnail' => '6751512',
                'price' => rand(99999, 200000)
            ],
            [
                'title' => 'Mercedes Benz C220',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'make' => 'Audi',
                'model' => 'Coupe',
                'type' => 'Sedan',
                'status' => 'Used',
                'year' => 2006,
                'thumbnail' => '6751512',
                'price' => rand(99999, 200000)
            ],
            [
                'title' => 'Mercedes Benz GLC',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'make' => 'Audi',
                'model' => 'Coupe',
                'type' => 'Sedan',
                'status' => 'Used',
                'year' => 2006,
                'thumbnail' => '13564163',
                'price' => rand(99999, 200000)
            ],
            [
                'title' => 'Audi TT',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'make' => 'Audi',
                'model' => 'Coupe',
                'type' => 'Sedan',
                'status' => 'Used',
                'year' => 2006,
                'thumbnail' => '41484123',
                'price' => rand(99999, 200000)
            ],
            [
                'title' => 'Toyota Prado (Model - 2013)',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'make' => 'Audi',
                'model' => 'Coupe',
                'type' => 'Sedan',
                'status' => 'Used',
                'year' => 2006,
                'thumbnail' => '41484123',
                'price' => rand(99999, 200000)
            ],
        ]);
    }
}
