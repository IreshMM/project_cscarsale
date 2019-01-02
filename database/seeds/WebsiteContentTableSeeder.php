<?php

use Illuminate\Database\Seeder;
use App\WebSite\Content;

class WebsiteContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliderImage1 = new Content(['title' => 'slider_image_1', 'description' => 'img1.jpg']);
        $sliderImage1->save();
        $sliderImage2 = new Content(['title' => 'slider_image_1', 'description' => 'img2.jpg']);
        $sliderImage2->save();
        $sliderImage3 = new Content(['title' => 'slider_image_1', 'description' => 'img3.jpg']);
        $sliderImage3->save();
        $sliderImage4 = new Content(['title' => 'slider_image_1', 'description' => 'img4.jpg']);
        $sliderImage4->save();

        $welcomeNoteTitle = new Content(['title' => 'welcome_note_title', 'description' => '#1 PLACE FOR ALL YOUR AUTOMOTIVE NEEDS']);
        $welcomeNoteTitle->save();
        $welcomeNote = new Content(['title' => 'welcome_note', 'description' => 'Autozone is a leading digital automotive marketplace designed to connect vehicle buyers and sellers. Our website lets you research and compare new, certified and used cars by searching for body type, mileage, price and numerous other criteria.']);
        $welcomeNote->save();
    }
}
