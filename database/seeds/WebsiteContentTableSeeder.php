<?php

use Illuminate\Database\Seeder;
use App\WebSite\Content;

class WebSiteContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $welcomeNoteTitle = new Content(['title' => 'welcome_note_title', 'description' => '#1 PLACE FOR ALL YOUR AUTOMOTIVE NEEDS']);
        $welcomeNoteTitle->save();
        $welcomeNote = new Content(['title' => 'welcome_note', 'description' => 'Autozone is a leading digital automotive marketplace designed to connect vehicle buyers and sellers. Our website lets you research and compare new, certified and used cars by searching for body type, mileage, price and numerous other criteria.']);
        $welcomeNote->save();
    }
}
