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
     * takes page number parameter from http request
     * list of car listings in JSON format on success
     * {'result' : 'failed', 'reasons': []} on failure
     */
    Route::get('index', 'CarListingController@index');

    /**
     * Creates a new car listing
     * takes required parameters from http request
     * returns http JSON response
     * {'result' : 'ok' } on success
     * {'result' : 'failed', 'reasons' : []} on failure
     */
    Route::post('create', 'CarListingController@create');

    /**
     * Update a car listing
     * takes required parameters from http request
     * returns http JSON response
     * {'result' : 'ok'} on success
     * {'result' : 'failed', 'reasons': []} on failure
     */
    Route::post('update', 'CarListingController@update');

    /**
     * Returns information of specified listing
     * takes required parameters from http request
     * returns http JSON response
     * information in JSON format on success
     * {'result' : 'failed', 'reasons': []} on failure
     */
    Route::post('show', 'CarListingController@show');
});