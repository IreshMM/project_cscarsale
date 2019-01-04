<?php

namespace App\Http\Controllers\WebSite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WebSite\Testimonial;

class TestimonialController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTestimonials = Testimonial::with('buyer')->with('seller')->get();

        return response()->json($allTestimonials);
    }

    /**
     * Creates a new testimonial.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'title'          => 'required',
            'description'    => 'required',
        ]);
        
        $data = Testimonial::filterValidFields($request->all());
        $testimonial = new Testimonial($data);
        $testimonial->save();

        return response()->json($testimonial);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate(['id' => 'required|exists:testimonial']);
        $testimonial = Testimonial::where('id', $request->id)->with('buyer')->with('seller')->get();

        return response()->json($testimonial);
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
            'id' => 'required|exists:testimonial'
        ]);

        $testimonial = Testimonial::find($request->id);

        $data = Testimonial::filterValidFields($request->all());

        foreach ($data as $key => $value) {
            $testimonial[$key] = $value;
        }

        $testimonial->save();

        return response()->json($testimonial);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customers\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $request->validate(['id' => 'required|exists:testimonial']);

        $testimonial = Testimonial::find($request->id);
        $testimonial->delete();

        return response()->json($testimonial);
    }
}
