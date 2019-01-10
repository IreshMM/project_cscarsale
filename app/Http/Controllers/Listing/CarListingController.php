<?php

namespace App\Http\Controllers\Listing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

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


    public function showAddForm() {
        return view('admin.vehicles.addVehicle');
    }
    /**
     * store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
        $request->validate([
            'id_car_model'  => 'required|exists:car_model',
            'mileage'       => 'required',
            'color'         => 'required',
            'year'          => 'required',
            'city'          => 'required',
            'buying_price'  => 'required',
            'selling_price' => 'required'
        ]);

        $data = CarListing::filterValidFields($request->all());
        // $newListing = $this->createCarListing($data);
        $newListing = new CarListing($data);
        $newListing->images = sizeof($request->allFiles());
        $newListing->id_seller = $request->user()->id;
        $newListing->save();
        
        // Handling images
        $files = $request->allFiles();
        
        // dd($files);

        $i = 1;
        foreach ($files as $image) {
            $fileToBeSaved = Image::make($image->getRealPath());
            $sizes = CarListing::IMAGE_SIZES;

            foreach ($sizes as $key => $value) {
                $savePath = 'storage\\images\\car_listing\\' . $key;
                $fileName = '\\' . $newListing->id_car_listing . $i . '.jpg';

                if(!file_exists($savePath)) mkdir($savePath, 666, True);

                $fileToBeSaved->encode('jpg')->fit($value[0], $value[1])
                ->save($savePath . $fileName);
            }
            $i++;
        }
        
        // return response()->json($newListing);
        return back()->with('success','Car Listing created successfully!');
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
        
        return redirect()->route('car_listing.index')->with('success', 'Car Listing updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cars\CarListing  $carListing
     * @return \Illuminate\Http\Response
     */
    public function updateForm(Request $request)
    {
        $request->validate([
            'id_car_listing' => 'required'
        ]);

        $data = CarListing::filterValidFields($request->all());

        $carListing = CarListing::find($request->id_car_listing);

        $carListing = $this->updateCarListing($carListing, $data);

        // return response()->json($carListing);

        return view('admin.vehicles.updatevehicle')->with('car', $carListing);
    }


    public function sellForm(Request $request) {
        $request->validate(['id_car_listing' => 'required|exists:car_listing']);

        $carListing = CarListing::find($request->id_car_listing);

        // dd($carListing);

        return view('admin.vehicles.sell')->with('car', $carListing);
    }

    /**
     * Sell specified car listing.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sell(Request $request) {

        // dd($request);
        $request->validate([
            'submit_form'       => 'required|exists:car_listing,id_car_listing',
            'title'             => 'required',
            'first_name'        => 'required',
            'last_name'         => 'required',
            'street_address'    => 'required',
            'city'              => 'required',
            'email'             => 'required',
            'selling_price'     => 'required',
            'phone'             => 'required',
            'date'              => 'date_format:Y-m-d'
        ]);

        $buyerData = Buyer::filterValidFields($request->all());
        $buyer = new Buyer($buyerData);

        $buyer->save();

        $carListing = CarListing::find($request->submit_form);
        
        $soldCar = $this->sellCarListing($carListing, $buyer, $request->date);

        // return response()->json($carListing);

        // return $soldCar;

        return redirect()->route('car_listing.index')->with('success', 'Vehicle is now marked as sold');
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
        $newListing->condition = "Used";
        $newListing->images = 5;
        $newListing->id_seller = 1;
        $newListing->save();
        return $newListing;
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