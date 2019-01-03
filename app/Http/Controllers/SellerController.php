<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allSellers = User::where('level', 'seller')->paginate(15);

        return response()->json($allSellers);
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
}
