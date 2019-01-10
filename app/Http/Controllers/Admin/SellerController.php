<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Cars\SellerRequest;
use App\Cars\CarListing;

use Intervention\Image\ImageManagerStatic as Image;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allSellers = User::where('level', 'seller')->withCount('soldCars')->get();

        // return response()->json($allSellers);
        return view('admin.users.sellers')->with('sellers', $allSellers);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate(['id_seller' => 'required']);
        $seller = User::where('level', 'seller')->where('id', $request->id_seller)->first();

        return response()->json($seller);
    }


    public function showRequests(Request $request) {
        $user = $request->user();

        $requests = $user->sellerRequests;
        return view('Seller.seller_listing')->with(['requests' => $requests]);
    }
    
    public function showAddSellerRequestForm() {
        return view('Seller.add_sellerVehicle');
    }

    public function addSellerRequest(Request $request){
        
        $request->validate([
            'year' => 'required',
            'price' => 'required',
            'mileage' => 'required',
            'color' => 'required',
            'condition' => 'required',
            'city' => 'required',
            'seller_description' => 'required'
        ]);

        $sellerRequest = new SellerRequest();
        $sellerRequest->condition = $request->condition;
        $sellerRequest->mileage = $request->mileage;
        $sellerRequest->color = $request->color;
        $sellerRequest->seller_description = $request->seller_description;
        $sellerRequest->year = $request->year;
        $sellerRequest->images = sizeof($request->allFiles());
        $sellerRequest->city = $request->city;
        $sellerRequest->id_car_model = $request->id_car_model;
        $sellerRequest->id_seller = $request->user()->id;
        $sellerRequest->price = $request->price;
        $sellerRequest->status = 'Pending';
        
        $sellerRequest->save();

        // Handling images
        $files = $request->allFiles();
        
        // dd($files);

        $i = 1;
        foreach ($files as $image) {
            $fileToBeSaved = Image::make($image->getRealPath());
            $sizes = CarListing::IMAGE_SIZES;

            foreach ($sizes as $key => $value) {
                $savePath = 'storage\\images\\seller_request\\' . $key;
                $fileName = '\\' . $sellerRequest->id_seller_request . $i . '.jpg';

                if(!file_exists($savePath)) mkdir($savePath, 666, True);

                $fileToBeSaved->encode('jpg')->fit($value[0], $value[1])
                ->save($savePath . $fileName);
            }
            $i++;
        }

        return redirect()->route('seller.dashboard')->with('success', 'Successfully added');

    }

    public function showUpdateSellerRequestForm(Request $request) {
        $request->validate([
            'id_seller_request' => 'required'
        ]);

        $sellerRequest = SellerRequest::find($request->id_seller_request);

        return view('Seller.update_seller_request')->with('request', $sellerRequest);
    }
}