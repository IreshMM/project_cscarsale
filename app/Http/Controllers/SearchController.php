<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars\CarMake;
use App\Cars\CarModel;

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
        return $request->all();
    }
}
