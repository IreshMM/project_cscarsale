<?php

use Illuminate\Database\Seeder;

class SellerRequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cars\SellerRequest::class, 10)->create();
    }
}
