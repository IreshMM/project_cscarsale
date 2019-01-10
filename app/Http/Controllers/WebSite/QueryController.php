<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cars\CarMake;
use App\Cars\CarModel;
use App\Cars\CarListing;
use App\Cars\SoldCar;

class QueryController extends Controller
{
    public function getMakeList() {
        $makes = CarMake::all();
        return $makes;
    }

    public function getModelList(Request $request) {
        if($request->has('id_car_make')) {
            $selectedMake = CarMake::find($request->id_car_make);
            return $selectedMake->models()->get();
        }
        return null;
    }

    public function getSoldCarList(Request $request) {
        $soldCars = SoldCar::all();

        // return response()->json($soldCars);
        return view('admin.vehicles.sold')->with('soldcars', $soldCars);
    }

    public function search(Request $request) {
        $request->input('keyword', '');
        $result = CarListing::where('seller_description', 'like', '%' . $request->input('keyword') . '%');

        $legacyParams = ['condition', 'id_car_model'];
        $parameters = $request->all();

        foreach ($parameters as $key => $value) {
            if(in_array($key, $legacyParams)) {
                $result = $result->where($key, $value);
            }
        }

        if($request->has('spec')) $specificationParams = $request->input('spec');
        else $specificationParams = [];

        $listings = $result->whereHas('model', function($query) use ($specificationParams) {
            foreach ($specificationParams as $key => $value) {
                $query = $query->whereHas('specifications', function ($query2) use ($key, $value) {
                    return $query2->where('name', $key)->where('value', $value);
                });
            }
            return $query;
        })->paginate(10);

        // return $paginator->data;

        foreach ($listings as $value) {
            $value->fuelType = $value->model->specifications()->where('name', 'Fuel type')
            ->withPivot('value')->first()->specification->value;
        }

        return view('website.pages.public.search')->with([
            'listings' => $listings
        ]);
    }

    public function getCarDetails(Request $request) {
        $carListing = CarListing::find($request->id);
        $SliderImages = $carListing->getImages("842X511");
        $SliderBarImages = $carListing->getImages("121X90");

        $specificationDetails = $carListing->model->specifications()
        ->where('id_car_specification_type', 1)->withPivot('value')->get();

        $specificationDetailsArray = [];
        foreach ($specificationDetails as $value) {
            $specificationDetailsArray[$value->name] = $value->specification->value;
        }
        $specificationDetailsArray['condition'] = $carListing->condition;
        $specificationDetailsArray['mileage'] = $carListing->mileage;
        $specificationDetailsArray['color'] = $carListing->color;
        $specificationDetailsArray['year'] = $carListing->year;
        $specificationDetailsArray['city'] = $carListing->city;

        $specificationFeatures = $carListing->model->specifications()
        ->where('id_car_specification_type', 2)->wherePivot('value', 'True')->get();

        $specificationFeaturesArray = [];

        foreach ($specificationFeatures as $value) {
            $specificationFeaturesArray[] = $value->name;
        }

        return view('website.pages.public.cardetails')->with([
            'car' => $carListing,
            'sliderImages' => $SliderImages,
            'sliderBarImages' => $SliderBarImages,
            'specDetails' => $specificationDetailsArray,
            'specFeatures' => $specificationFeaturesArray
        ]);
    }
}
