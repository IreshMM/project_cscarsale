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
        $this->call(UsersTableSeeder::class);
        $this->call(CarListingTableSeeder::class);
        $this->call(BestOfferTableSeeder::class);
        $this->call(BuyersTableSeeder::class);
        $this->call(SoldCarTableSeeder::class);
        $this->call(SubscriptionTableSeeder::class);
        $this->call(FeaturedListingTableSeeder::class);
        $this->call(TestimonialTableSeeder::class);
        $this->call(WebsiteContentTableSeeder::class);
        $this->call(SellerRequestTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        $this->call(ContentTableSeeder::class);
    }
}
