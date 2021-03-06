<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars\CarMake;
use App\Cars\CarModel;
use App\Cars\CarListing;

class SearchController extends Controller
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

    public function search(Request $request) {
        $request->input('keyword', '');
        $result = CarListing::where('seller_description', 'like', '%' . $request->input('keyword') . '%');

        $legacyParams = ['condition', 'mileage', 'color', 'year', 'city', 'id_car_model'];
        $parameters = $request->all();

        foreach ($parameters as $key => $value) {
            if(in_array($key, $legacyParams)) {
                $result = $result->where($key, $value);
            }
        }

        if($request->has('spec')) $specificationParams = $request->input('spec');
        else $specificationParams = [];

        $result->whereHas('model', function($query) use ($specificationParams) {
            foreach ($specificationParams as $key => $value) {
                $query = $query->whereHas('specifications', function ($query2) use ($key, $value) {
                    return $query2->where('name', $key)->where('value', $value);
                });
            }
            return $query;
        });

        // return $result->get()[0]->model()->first()->name;

        return view('pages.public.search')->with('listings', $result->get());
    }
}