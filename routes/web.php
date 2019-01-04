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

Auth::routes();

Route::get('/', function () {return view('admin.vehicles.list');});

// ROUTE GROUP FOR CAR MANAGING CAR LISTINGS
Route::prefix('carlisting')->namespace('Listing')->group(function() {
    
    // Returns a set of required car listings for page
    Route::get('index', 'CarListingController@index');

    // Creates a new car listing
    Route::post('create', 'CarListingController@create');

    // Update a car listing
    Route::post('update', 'CarListingController@update');

    // Returns information of specified listing
    Route::post('show', 'CarListingController@show');

    // Sell the specified car listing
    Route::post('sell', 'CarListingController@sell');
});

// ROUTE GROUP FOR MANAGING SELLER REQUESTS
Route::prefix('seller_request')->namespace('Listing')->group(function(){

    // Returns a list of all seller requests
    Route::get('index', 'SellerRequestController@index');

    // Creates a new seller request
    Route::post('create', 'SellerRequestController@create');

    // Returns the information of specified seller request
    Route::post('show', 'SellerRequestController@show');

    // Update specified seller request
    Route::post('update', 'SellerRequestController@update');

    // Delete specified seller request
    Route::post('delete', 'SellerRequestController@delete');
});

// ROUTE GROUP FOR MANAGING SELLERS
Route::prefix('seller')->namespace('Admin')->group(function() {

    // Returns set of required sellers for page
    Route::get('index', 'SellerController@index');

    // Returns the information of specified seller
    Route::post('show', 'SellerController@show');
});

// ROUTE GROUP FOR MANAGING EMPLOYEES
Route::prefix('employee')->namespace('Admin')->group(function(){

    // Returns the set of all employees
    Route::get('index', 'EmployeeController@index');

    // Creates an employee
    Route::post('create', 'EmployeeController@create');

    // Returns the information of specified employee
    Route::post('show', 'EmployeeController@show');

    // Updates the specified employee information
    Route::post('update', 'EmployeeController@update');

    // Deletes the specified employee
    Route::post('delete', 'EmployeeController@delete');
});

// ROUTE GROUP FOR MANAGING SUBSCRIPTIONS
Route::prefix('subscription')->namespace('WebSite')->group(function() {
    
    // Returns the set of all subscriptions
    Route::get('index', 'SubscriptionController@index');

    // Creates a subscription
    Route::post('create', 'SubscriptionController@create');

    // Returns information of specified subscription
    Route::post('show', 'SubscriptionController@show');

    // Updates the information of specified subscription
    Route::post('update', 'SubscriptionController@update');

    // Deletes specified subscription
    Route::post('delete', 'SubscriptionController@delete');
});

// ROUTE GROUP FOR MANAGING BEST OFFERS
Route::prefix('best_offer')->namespace('WebSite')->group(function() {
    
    // Returns the set of all best offers
    Route::get('index', 'BestOfferController@index');

    // Creates a best offer
    Route::post('create', 'BestOfferController@create');

    // Returns information of specified best offer
    Route::post('show', 'BestOfferController@show');

    // Deletes specified best offer
    Route::post('delete', 'BestOfferController@delete');
});

// ROUTE GROUP FOR MANAGING FEATURED LISTINGS
Route::prefix('featured_listing')->namespace('WebSite')->group(function() {
    
    // Returns the set of all featured listings
    Route::get('index', 'FeaturedListingController@index');

    // Creates a featured listing
    Route::post('create', 'FeaturedListingController@create');

    // Returns information of specified featured listing
    Route::post('show', 'FeaturedListingController@show');

    // Deletes specified featured listing
    Route::post('delete', 'FeaturedListingController@delete');
});

// ROUTE GROUP FOR MANAGING TESTIMONIALS
Route::prefix('testimonial')->namespace('WebSite')->group(function() {
    
    // Returns the set of all testimonials
    Route::get('index', 'TestimonialController@index');

    // Creates a testimonials
    Route::post('create', 'TestimonialController@create');

    // Returns information of specified testimonials
    Route::post('show', 'TestimonialController@show');

    // Updates the information of specified testimonials
    Route::post('update', 'TestimonialController@update');

    // Deletes specified testimonials
    Route::post('delete', 'TestimonialController@delete');
});

// ROUTE GROUP FOR MANAGING WEBSITE CONTENT
Route::prefix('website_content')->namespace('WebSite')->group(function() {
    
    // Returns the set of all web site contents
    Route::get('index', 'ContentController@index');

    // Creates a web site content
    Route::post('create', 'ContentController@create');

    // Returns information of specified web site content
    Route::post('show', 'ContentController@show');

    // Updates the information of specified web site content
    Route::post('update', 'ContentController@update');

    // Deletes specified web site content
    Route::post('delete', 'ContentController@delete');
});