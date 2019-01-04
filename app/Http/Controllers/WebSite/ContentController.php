<?php

namespace App\Http\Controllers\WebSite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WebSite\Content;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allContent = Content::all();

        return response()->json($allContent);
    }

    /**
     * Creates a new content.
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
        
        $data = Content::filterValidFields($request->all());
        $content = new Content($data);
        $content->save();

        return response()->json($content);
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
        $content = Content::find($request->id);

        return response()->json($content);
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

        $content = Content::find($request->id);

        $data = Content::filterValidFields($request->all());

        foreach ($data as $key => $value) {
            $content[$key] = $value;
        }

        $content->save();

        return response()->json($content);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customers\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $request->validate(['id' => 'required|exists:website_content']);

        $content = Content::find($request->id);
        $content->delete();

        return response()->json($content);
    }
}