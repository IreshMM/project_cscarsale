<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cars\CarMake;
use App\Cars\CarModel;
use App\Cars\CarListing;
use App\Cars\SoldCar;
use Illuminate\Support\Facades\DB;

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


    /* Report generation functions */
    public function getVehicleCount() {
        $count = CarListing::count('*');

        $investment = CarListing::sum('buying_price');

        $assets = ['carCount' => $count, 'investment' => $investment];

        return $assets;
    }


    public function getSalesCount() {
        $salesCount = SoldCar::count('*');
        $cost = SoldCar::sum('buying_price');
        $return = SoldCar::sum('selling_price');

        $sales = [
            'salesCount' => $salesCount,
            'cost' => $cost,
            'return' => $return
        ];

        return $sales;
    }

    public function getRatios() {
        $result = DB::table('sold_car')->join('car_model', 'car_model.id_car_model', '=', 'sold_car.id_car_model')
        ->select('car_model.body_type', DB::raw('count(*) as count'))->groupBy('car_model.body_type')->get();

        return $result;
    }


    // Get report
    public function getReport() {
        $report = [
            'asset' => $this->getVehicleCount(),
            'investment' => $this->getSalesCount(),
            'ratios' => $this->getRatios()
        ];

        return view('admin.finance.chart')->with('report', $report);
    }
}
