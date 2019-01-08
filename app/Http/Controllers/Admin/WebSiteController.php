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
        $featuredListings = FeaturedListing::with(['carListing', 'carListing.seller', 'carListing.model'])->get();
        $bestOffers = BestOffer::with(['carListing', 'carListing.seller', 'carListing.model'])->get();
        // dd($bestOffers);
        // return response()->json($featuredListings);
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

        return view('admin.website.homePage2')->with($data);
    }

    public function contact() {
        $email = Content::where('title', 'email')->first()->description;
        $mobile = Content::where('title', 'mobile')->first()->description;
        $landline = Content::where('title', 'land_line')->first()->description;
        $addressLine1 = Content::where('title', 'address_line_1')->first()->description;
        $addressLine2 = Content::where('title', 'address_line_2')->first()->description;
        $addressLine3 = Content::where('title', 'address_line_3')->first()->description;
        $addressLine4 = Content::where('title', 'address_line_4')->first()->description;
        $contactMessage = Content::where('title', 'contact_message')->first()->description;

        return view('admin.website.contact')->with([
            'email' => $email,
            'mobile' => $mobile,
            'land_line' => $landline,
            'address_line_1' => $addressLine1,
            'address_line_2' => $addressLine2,
            'address_line_3' => $addressLine3,
            'address_line_4' => $addressLine4,
            'message' => $contactMessage
        ]);
    }

    public function setContact(Request $request) {
        // dd($request);
        $data = $request->validate([
            'email' => 'required',
            'mobile' => 'required',
            'land_line' => 'required',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'address_line_3' => 'required',
            'address_line_4' => 'required',
            'message' => 'required'
        ]);

        foreach ($data as $key => $value) {
            $content = new Content([
                'title' => $key,
                'description' => $value
            ]);

            $content->save();
        }

        return back()->with('success', 'Successfully changed');
    }

    public function tos(){
        $tos = Content::where('title', 'tos')->first()->description;
        return view('admin.website.TOS')->with([
            'tos' => $tos
        ]);
    }

    public function setTos(Request $request) {
        // dd($request);
        $request->validate(['tos' => 'required']);

        $tos = new Content(['title' => 'tos', 'description' => $request->tos]);
        $tos->save();

        return back()->with('success', 'Successfully changed');
    }
    
    public function setWelcomeNote(Request $request) {
        // dd($request);
        $request->validate([
            'welcome_note' => 'required',
            'welcome_note_title' => 'required'
        ]);

        $welcomeNote = Content::where('title', 'welcome_note')->first();
        $welcomeNote->description = $request->welcome_note;
        $welcomeNote->save();

        $welcomeNoteTitle = Content::where('title', 'welcome_note_title')->first();
        $welcomeNoteTitle->description = $request->welcome_note_title;
        $welcomeNoteTitle->save();

        return back()->with('success', 'Updated successfully');
    }

    public function showHomePage() {
        $welcomeNoteTitle = Content::where('title', 'welcome_note_title')->first()->description;
        $welcomeNote = Content::where('title', 'welcome_note')->first()->description;

        
    }

}
