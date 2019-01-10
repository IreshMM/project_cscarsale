<?php

namespace App\Http\Controllers\Listing;

use App\Http\Controllers\Controller;
use App\Cars\SellerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Intervention\Image\ImageManagerStatic as Image;
use App\Cars\CarListing;

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
        // dd($request);
        $request->validate([
            'condition' => 'required',
            'mileage' => 'required',
            'year' => 'required',
            'body_type' => 'required',
            'from' => 'required',
            'to' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::create([
            'title' => 'Mr',
            'first_name' => $request->name,
            'last_name' => 'Dissanayaka',
            'street_address' => 'Rajanganaya, Tract 8',
            'city' => 'Anuradhapura',
            'phone' => '077451794',
            'level' => 'seller',
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $data = SellerRequest::filterValidFields($request->all());

        $sellerRequest = new SellerRequest($data);
        $sellerRequest->color = "Red";
        $sellerRequest->seller_description = "Lorem Ipsum some text";
        $sellerRequest->city = "Anuradhapura";
        $sellerRequest->price = '540545';
        $sellerRequest->status = "Pending";
        $sellerRequest->images = sizeof($request->allFiles());
        $sellerRequest->id_seller = $user->id;
        $sellerRequest->id_car_model = 1;
        $sellerRequest->price = substr($request->price, 1, strlen($request->price) - 1);
        $sellerRequest->save();




         // Handling images
        //  $files = $request->allFiles();
        
         // dd($files);
 
        //  $i = 1;
        //  foreach ($files as $image) {
        //      $fileToBeSaved = Image::make($image->getRealPath());
        //      $sizes = [
        //          "468X280" => [468, 280],
        //          "270X150" => [270, 150],
        //          "322X230" => [322, 230],
        //          "842X511" => [842, 511]
        //      ];
 
        //      foreach ($sizes as $key => $value) {
        //          $fileToBeSaved->encode('jpg')->fit($value[0], $value[1])
        //          ->save('storage\\images\\listing_request\\' . $key . '\\' . $sellerRequest->id_seller_request . $i . '.jpg');
        //      }
        //      $i++;
        //  }

        //  dd($user);
        return redirect()->route('seller.dashboard')->with('success', 'Request Sent');
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

        return back()->with('success', 'Your request has been updated successfully');
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

        return back()->with('warning', 'Your request has been deleted!');
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