<?php

namespace App\Http\Controllers\Listing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image; // library to 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
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
        $validator = Validator::make($request->all(), [
        
            'id_car_model'  => 'required|exists:car_model',
            'mileage'       => 'required',
            'color'         => 'required',
            'year'          => 'required',
            'city'          => 'required',
            'buying_price'  => 'required',
            'selling_price' => 'required'
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
       }


        // $data = CarListing::filterValidFields($request->all());
        // $newListing = $this->createCarListing($data);
        
        $newListing = new carListing();
        $newListing ->condition = $request->condition;
        $newListing ->mileage = $request->mileage;
        $newListing ->color = $request->color;
        $newListing ->seller_description = $request->seller_description;
        $newListing ->year = $request->year;
        $newListing ->images = $request->images;
        $newListing ->city = $request->city;
        $newListing ->id_car_model = $request->id_car_model;
        $newListing ->id_seller = $request->id_seller;
        $newListing ->buying_price = $request->buying_price;
        $newListing ->selling_price = $request->selling_price;
        $newListing->condition = "Used";
        $newListing->images = 5;
        $newListing->id_seller = 1;
        $newListing->save();



        // Handling images
        $files = $request->allFiles();
                          //allfiles array
        // dd($files);

        $i = 1;
        foreach ($files as $image) {
            $fileToBeSaved = Image::make($image->getRealPath());
            $sizes = [
                "468X280" => [468, 280],
                "270X150" => [270, 150],
                "322X230" => [322, 230],
                "842X511" => [842, 511]
            ];
            // setting path to store uploaded images
            foreach ($sizes as $key => $value) {
                $savePath = 'storage\\images\\car_listing\\' . $key;
                $fileName = '\\' . $newListing->id_car_listing . $i . '.jpg';
                if(!file_exists($savePath)) {
                    mkdir($savePath, 666, true);
                }
                $fileToBeSaved->encode('jpg')->fit($value[0], $value[1])
                ->save($savePath . $fileName);
            }
            $i++;
        }
        
       
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
        
        $validator = Validator::make($request->all(), [
            'id_car_listing'=> 'required',
            'mileage'       => 'required',
            'color'         => 'required',
            'year'          => 'required',
            'city'          => 'required',
            'buying_price'  => 'required',
            'selling_price' => 'required'
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
        }
        // $data = CarListing::filterValidFields($request->all());
        // $carListing = CarListing::find($request->id_car_listing);
        // $carListing = $this->updateCarListing($carListing, $data);
        $carListing = CarListing::find($request->id_car_listing);
        $carListing ->condition = $request->condition;
        $carListing ->mileage = $request->mileage;
        $carListing ->color = $request->color;
        $carListing ->seller_description = $request->seller_description;
        $carListing ->year = $request->year;
        $carListing ->images = $request->images;
        $carListing ->city = $request->city;
        $carListing ->id_seller = $request->id_seller;
        $carListing ->buying_price = $request->buying_price;
        $carListing ->selling_price = $request->selling_price;
        $carListing->condition = "Used";
        $carListing->images = 5;
        $carListing->save();

        
        return redirect('carlisting/index')->with('success', 'Car Listing updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cars\CarListing  $carListing
     * @return \Illuminate\Http\Response
     */
    //filling the updatevehicle form with entered data
    public function updateForm(Request $request)
    {
        $request->validate([
            'id_car_listing' => 'required'
        ]);

        $data = CarListing::filterValidFields($request->all());

        // Calling the find static function on CarListing class like CarListing::find(primary_key_here)
        // return an instance of CarListing class which has all the attributes from the corresponding
        // row in car_listing table in the database.
        
        $carListing = CarListing::find($request->id_car_listing);
      
        return view('admin.vehicles.updatevehicle')->with('car', $carListing);
    }
    // public function update(Request $request)
    // {
    //     // dd($request);
    //     $request->validate([
    //         'id_car_listing' => 'required'
    //     ]);

    //     $data = CarListing::filterValidFields($request->all());

    //     $carListing = CarListing::find($request->id_car_listing);
    //     $carListing = $this->updateCarListing($carListing, $data);
        
    //     return redirect('carlisting/index')->with('success', 'Car Listing updated successfully');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Cars\CarListing  $carListing
    //  * @return \Illuminate\Http\Response
    //  */
    // public function updateForm(Request $request)
    // {
    //     $request->validate([
    //         'id_car_listing' => 'required'
    //     ]);

    //     $data = CarListing::filterValidFields($request->all());

    //     $carListing = CarListing::find($request->id_car_listing);

    //     $carListing = $this->updateCarListing($carListing, $data);

    //     // return response()->json($carListing);

    //     return view('admin.vehicles.updatevehicle')->with('car', $carListing);
    // }


    public function sellForm(Request $request) {

        $request->validate(['id_car_listing' => 'required|exists:car_listing']);
        
        $carListing = CarListing::find($request->id_car_listing);
        // return an instance of CarListing class which has all the attributes from the 
        //corresponding row in carListing  table

    
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
        $validator = Validator::make($request->all(), [
            'submit_form'       => 'required|exists:car_listing,id_car_listing',
            'title'             => 'required',
            'first_name'        => 'required',
            'last_name'         => 'required',
            'street_address'    => 'required',
            'city'              => 'required',
            'email'             => 'required',
            'selling_price'     => 'required',
            'phone'             => 'required|digits:10',
            'date'              => 'date_format:Y-m-d'
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
       }

        $buyerData = Buyer::filterValidFields($request->all());
        $buyer = new Buyer();
        $buyer ->title = $request ->title;
        $buyer ->first_name = $request ->first_name;
        $buyer ->last_name = $request ->last_name ;
        $buyer ->street_address = $request ->street_address;
        $buyer ->email = $request ->email; 
        $buyer ->city = $request ->city;
        $buyer ->phone = $request ->phone;

        $buyer->save();

        $carListing = CarListing::find($request->submit_form);
        
        $soldCar = $this->sellCarListing($carListing, $buyer, $request->date);

        

        

        return redirect()->route('car_listing.index')->with('success', 'Vehicle is now marked as sold');
    }

    /************************* */
    /* Utility functions below */
    /************************* */

   

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