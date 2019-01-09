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
            'tos' => 'This our terms and conditions'
        ];

        foreach ($contents as $key => $value) {
            Content::create([
                $key => $value
            ]);
        }
    }
}
