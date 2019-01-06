<?php

namespace App\Http\Controllers\Listing;

use App\Http\Controllers\Controller;
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
        $allSellerRequests = SellerRequest::with([
            'seller:id,first_name,last_name',
            'model:id_car_model,name',
        ])->get();

        foreach ($allSellerRequests as $value) {
            $value->images = $value->getImages(SellerRequest::ADMIN_VIEW);
        }
        // return response()->json($allSellerRequests);
        return view('admin.vehicles.requestlist')->with('requests', $allSellerRequests);
        
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
    public function show(Request $request)
    {
        $request->validate(['id_seller_request']);
        $sellerRequest = SellerRequest::find($request->id_seller_request);
        
        return response()->json($sellerRequest);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate(['id_seller_request' => 'required']);
        $sellerRequest = SellerRequest::find($request->id_seller_request);

        $data = SellerRequest::filterValidFields($request->all());

        foreach ($data as $key => $value) {
            $sellerRequest[$key] = $value;
        }

        $sellerRequest->save();

        return response()->json($sellerRequest);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $request->validate(['id_seller_request']);

        $sellerRequest = SellerRequest::find($request->id_seller_request);
        $sellerRequest->delete();

        return $sellerRequest->id_seller_request;
    }

    public function approve(Request $request) {

        $request->validate([
            'id_seller_request' => 'required|exists:seller_request',
            'selling_price' => 'required'
        ]);

        $sellerRequest = SellerRequest::find($request->id_seller_request);
        $newListing = $sellerRequest->approve($request->selling_price);

        return back()->with('success', 'Seller request has been approved');
    }
}