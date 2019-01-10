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
        $makes = [
            'Toyota',
            'Nissan',
            'Mitsubishi',
            'Honda',
            'Suzuki'
        ];

        foreach ($makes as $make) {
            CarMake::create(['name' => $make]);
        }
    }
}
