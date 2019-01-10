<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Cars\SellerRequest;

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
        $sellerRequest = new SellerRequest();
        $sellerRequest->condition = $request->condition;
        $sellerRequest->mileage = $request->mileage;
        $sellerRequest->color = $request->color;
        $sellerRequest->seller_description = $request->seller_description;
        $sellerRequest->year = $request->year;
        $sellerRequest->images = 4;
        $sellerRequest->city = $request->city;
        $sellerRequest->id_car_model = $request->id_car_model;
        $sellerRequest->id_seller = $request->user()->id;
        $sellerRequest->price = $request->price;
        $sellerRequest->status = 'Pending';

        // $sellerRequest->save();
        
        
        /* 
        $sellerRequest->condition = $request->condition;   //table akeh thiyena eak = form akeh thiyena eka
        $sellerRequest->mileage = $request->mileage;
        $sellerRequest->color = $request->color;
        $sellerRequest->seller_description = $request->seller_description;
        $sellerRequest->year = $request->year;
        $sellerRequest->images = $request->images;
        $sellerRequest->city = $request->city;
        $sellerRequest->id_car_model = $request->id_car_model;
        $sellerRequest->id_seller= $request->id_seller;
        $sellerRequest->price = $request->price;
        $sellerRequest->status = $request->status; */
        
        $sellerRequest->save();

        return back()->with('success', 'Successfully added');

    }
}
