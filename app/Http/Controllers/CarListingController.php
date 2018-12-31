<?php

namespace App\Http\Controllers;

use App\Cars\CarListing;
use Illuminate\Http\Request;

class CarListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cars\CarListing  $carListing
     * @return \Illuminate\Http\Response
     */
    public function show(CarListing $carListing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cars\CarListing  $carListing
     * @return \Illuminate\Http\Response
     */
    public function edit(CarListing $carListing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cars\CarListing  $carListing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarListing $carListing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cars\CarListing  $carListing
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarListing $carListing)
    {
        //
    }

    /* Utility functions below */

    /**
     * update the specified carListing
     * 
     * @param \App\Cars\CarListing $carListing
     * @param AssociativeArray $data
     */
    public function updateCarListing($carListing, $data) {
        foreach ($data as $key => $value) {
            $carListing[$key] = $value;
        }

        $carListing->save();
    }

    
}
