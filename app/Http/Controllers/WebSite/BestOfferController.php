<?php

namespace App\Http\Controllers\WebSite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WebSite\BestOffer;

class BestOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bestOffers = BestOffer::with('carListing')->get();

        return response()->json($bestOffers);
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

        $bestOffer = new BestOffer(['id_car_listing' => $request->id_car_listing]);

        $bestOffer->save();
        
        return response()->json($bestOffer);
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

        $bestOffer = BestOffer::where('id_car_listing', $request->id_car_listing)
        ->with('carListing')->first();

        return response()->json($bestOffer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $request->validate(['id_car_listing' => 'required|exists:best_offer']);

        $bestOffer = BestOffer::find($request->id_car_listing);
        $bestOffer->delete();

        return back()->with('warning', 'Best offer entry deleted!');
    }
}
