<?php

namespace App\Http\Controllers\Listing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cars\CarListing;
use App\Cars\SoldCar;
use App\Customers\Buyer;

class CarListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carListings = CarListing::with([
            'model:id_car_model,name,id_car_make',
            'model.make:id_car_make,name',
            'seller:id,first_name,last_name'
        ])->get();

        // return response()->json($carListings);
        return view('admin.vehicles.list')->with('cars', $carListings);
    }

    /**
     * store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return $request->all();
        $request->validate([
            'id_car_model'  => 'required|exists:car_model',
            'id_seller'     => 'required|exists:users,id',
            'condition'     => 'required',
            'mileage'       => 'required',
            'color'         => 'required',
            'year'          => 'required',
            'images'        => 'required',
            'city'          => 'required',
            'buying_price'  => 'required',
            'selling'       => 'required'
        ]);

        $data = CarListing::filterValidFields($request->all());
        $newListing = $this->createCarListing($data);
        return response()->json($newListing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'id_car_listing' => 'required'
        ]);

        $data = CarListing::filterValidFields($request->all());

        $carListing = CarListing::find($request->id_car_listing);
        $carListing = $this->updateCarListing($carListing, $data);
        
        return response()->json($carListing);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cars\CarListing  $carListing
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate([
            'id_car_listing' => 'required'
        ]);

        return CarListing::find($request->id_car_listing);
    }

    /**
     * Sell specified car listing.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sell(Request $request) {
        $request->validate([
            'id_car_listing'    => 'required|exists:car_listing',
            'title'             => 'required',
            'first_name'        => 'required',
            'last_name'         => 'required',
            'street_address'    => 'required',
            'city'              => 'required',
            'email'             => 'required',
            'buying_price'      => 'required',
            'selling_price'     => 'required'
        ]);

        $buyerData = Buyer::filterValidFields($request->all());
        $buyer = new Buyer($buyerData);
        $buyer->save();

        $carListing = CarListing::find($request->id_car_listing);
        
        $soldCar = $this->sellCarListing($carListing, $buyer, $request->date);

        return $soldCar;
    }

    /************************* */
    /* Utility functions below */
    /************************* */

    /**
     * create a new car listing and returns the object created
     * @param AssociativeArray $data
     * @return App\Cars\CarListing
     */
    public function createCarListing($data) {
        $newListing = new CarListing($data);
        $newListing->save();
        return $data;
    }


    /**
     * update the specified carListing
     * @param \App\Cars\CarListing $carListing
     * @param AssociativeArray $data
     */
    public function updateCarListing($carListing, $data) {
        foreach ($data as $key => $value) {
            $carListing[$key] = $value;
        }

        $carListing->save();

        return $carListing;
    }


    /**
     * returns the specified car listings on given parameters
     * as an associative array
     * @param AssociativeArray $data
     * @return array of App\Cars\CarListing
     */
    public function viewCarListing($data) {
        $query = CarListing::query();
        foreach ($data as $key => $value) {
            $query = $query->where($key, $value);
        }

        return $query->get();
    }


    /**
     * Mark the specified car as sold to a specified buyer
     * @param App\Cars\CarListing $carListing
     * @param App\Customers\Buyer
     * @return App\Cars\SoldCar
     */
    public function sellCarListing($carListing, $buyer, $date) {
        $soldCar = new SoldCar();
        $soldCar->date = $date;
        foreach ($carListing->toArray() as $key => $value) {
            $soldCar[$key] = $value;
        }

        $carListing->delete();
        $soldCar->buyer()->associate($buyer);
        $soldCar->save();

        return $soldCar;
    }
}