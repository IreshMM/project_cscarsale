<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Cars\CarListing;
use App\WebSite\FeaturedListing;
use App\WebSite\Content;
use App\WebSite\BestOffer;

class WebSiteController extends Controller
{
    public function index() {
        $carListings = CarListing::all();
        $featuredListings = FeaturedListing::all();
        $bestOffers = BestOffer::all();
        
        $welcomeNoteTitle = Content::where('title', 'welcome_note_title')->first()->description;
        $welcomeNote = Content::where('title', 'welcome_note')->first()->description;

        // dd($carListings);
        // dd($featuredListings);
        // dd($bestOffers);
        // dd($welcomeNoteTitle);
        // dd($welcomeNote);

        $data = [
            'cars' => $carListings,
            'featured' => $featuredListings,
            'title' => $welcomeNoteTitle,
            'welcome' => $welcomeNote,
            'bestoffers' => $bestOffers
        ];

        return view('admin.website.homePage')->with($data);
    }
}
