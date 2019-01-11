<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Customers\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allSubscriptions = Subscription::all();

        return view('admin.users.subscription')->with(['subscriptions' => $allSubscriptions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'email'         => 'required',
            'id_car_model'  => 'required'
        ]);
        
        $data = Subscription::filterValidFields($request->all());
        $subscription = new Subscription($data);
        $subscription->save();

        return response()->json($subscription);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate(['id' => 'required']);
        $subscription = Subscription::find($request->id);

        return response()->json($subscription);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:subscription'
        ]);

        $subscription = Subscription::find($request->id);

        $data = Subscription::filterValidFields($request->all());

        foreach ($data as $key => $value) {
            $subscription[$key] = $value;
        }

        $subscription->save();

        return response()->json($subscription);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customers\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $request->validate(['id' => 'required|exists:subscription']);

        $subscription = Subscription::find($request->id);
        $subscription->delete();

        return back()->with('warning', 'Subscription has been deleted!');
    }
}
