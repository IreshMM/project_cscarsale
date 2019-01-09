<?php

use Illuminate\Database\Seeder;
use App\WebSite\Content;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            'tos' => 'This our terms and conditions',
            'email' => 'socialexpz@gmail.com',
            'mobile' => '0775133590',
            'land_line' => 'sfgfdgdgf',
            'address_line_1' => 'Rajanganaya',
            'address_line_2' => 'Tract 8',
            'address_line_3' => 'Tract 8',
            'address_line_4' => 'Tract 8',
            'contact_message' =>'Contact message ekak na'
        ];

        foreach ($contents as $key => $value) {
            Content::create([
                'title' => $key,
                'description' => $value
            ]);
        }
    }
}
