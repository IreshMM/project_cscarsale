<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.public.welcome');
});

Route::get('/search2', function () {
    return view('pages.search');
});

Route::get('/details', function () {
    return view('pages.vehicle');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/test', function () {
    return view('testviews.test');
});

Route::get('/test2', function () {
    return view('testviews.test2');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('query')->group(function(){
    Route::get('makelist', 'SearchController@getMakeList')->name('make_list');
    Route::get('modellist', 'SearchController@getModelList')->name('model_list');
});

Route::get('/search', 'SearchController@search')->name('search');

// ROUTE GROUP FOR CAR MANAGING CAR LISTINGS
Route::prefix('carlisting')->group(function() {
    /**
     * Returns a set of required car listings for page
     */
    Route::get('index', 'CarListingController@index');

    /**
     * Creates a new car listing
     */
    Route::post('create', 'CarListingController@create');

    /**
     * Update a car listing
     */
    Route::post('update', 'CarListingController@update');

    /**
     * Returns information of specified listing
     */
    Route::post('show', 'CarListingController@show');

    /**
     * Sell the specified car listing
     */
    Route::post('sell', 'CarListingController@sell');
});


// ROUTE GROUP FOR MANAGING SELLERS
Route::prefix('seller')->group(function() {

    /**
     * Returns set of required sellers for page
     */
    Route::get('index', 'SellerController@index');

    /**
     * Returns the information of specified seller
     */
    Route::post('show', 'SellerController@show');
});

// ROUTE GROUP FOR MANAGING SELLER REQUEST
Route::prefix('seller_request')->group(function(){

    /**
     * Returns a list of all seller requests
     */
    Route::get('index', 'SellerRequestController@index');

    /**
     * Creates a new seller request
     */
    Route::post('create', 'SellerRequestController@create');
});