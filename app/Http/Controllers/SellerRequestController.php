<?php

namespace App\Http\Controllers;

use App\Cars\SellerRequest;
use Illuminate\Http\Request;

class SellerRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allSellerRequests = SellerRequest::all();
        return response()->json($allSellerRequests);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'condition'             => 'required',
            'color'                 => 'required',
            'mileage'               => 'required',
            'seller_description'    => 'required',
            'year'                  => 'required',
            'images'                => 'required',
            'city'                  => 'required',
            'id_car_model'          => 'required',
            'id_seller'             => 'required',
            'status'                => 'required'
        ]);

        $data = SellerRequest::filterValidFields($request->all());

        $sellerRequest = new SellerRequest($data);
        $sellerRequest->save();
        
        return response()->json($sellerRequest);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cars\SellerRequest  $sellerRequest
     * @return \Illuminate\Http\Response
     */
    public function show(SellerRequest $sellerRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cars\SellerRequest  $sellerRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerRequest $sellerRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cars\SellerRequest  $sellerRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SellerRequest $sellerRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cars\SellerRequest  $sellerRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerRequest $sellerRequest)
    {
        //
    }
}
