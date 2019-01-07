<?php

namespace App\Http\Controllers\WebSite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WebSite\FeaturedListing;

class FeaturedListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featuredListings = FeaturedListing::with('carListing')->get();

        return response()->json($featuredListings);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate(['id_car_listing' => 'required|exists:car_listing']);

        $featuredListing = new FeaturedListing(['id_car_listing' => $request->id_car_listing]);

        $featuredListing->save();
        return response()->json($featuredListing);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate(['id_car_listing' => 'required']);

        $featuredListing = FeaturedListing::where('id_car_listing', $request->id_car_listing)
        ->with('carListing')->first();

        return response()->json($featuredListing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $request->validate(['id_car_listing' => 'required|exists:featured_listing']);

        $featuredListing = FeaturedListing::find($request->id_car_listing);
        $featuredListing->delete();

        return back()->with('warning', 'Featured Listing deleted!');
    }
}