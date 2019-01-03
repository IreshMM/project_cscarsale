<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use cscarsale;
class chartController extends Controller
{
   


    function index()
    {
      $car_list = DB::table('sold_vehicles')
         ->groupBy('Month')
         ->get();
     return view('chart')->with('car_list', $car_list);
    }
    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('sold_vehicles')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
}
