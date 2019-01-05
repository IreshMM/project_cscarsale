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

Route::get('/', function () {return view('admin.website.homePage');})->name('home');

// ROUTE GROUP FOR CAR MANAGING CAR LISTINGS
Route::prefix('carlisting')->name('car_listing.')->namespace('Listing')->group(function() {
    
    // Returns a set of required car listings for page
    Route::get('index', 'CarListingController@index')->name('index');;

    // Creates a new car listing
    Route::post('create', 'CarListingController@create')->name('create');

    // Update a car listing
    Route::post('update', 'CarListingController@update')->name('update');

    // Returns information of specified listing
    Route::post('show', 'CarListingController@show')->name('show');

    // Sell the specified car listing
    Route::post('sell', 'CarListingController@sell')->name('sell');
});

// ROUTE GROUP FOR MANAGING SELLER REQUESTS
Route::prefix('seller_request')->name('seller_request.')->namespace('Listing')->group(function(){

    // Returns a list of all seller requests
    Route::get('index', 'SellerRequestController@index')->name('index');

    // Creates a new seller request
    Route::post('create', 'SellerRequestController@create')->name('create');

    // Returns the information of specified seller request
    Route::post('show', 'SellerRequestController@show')->name('show');

    // Update specified seller request
    Route::post('update', 'SellerRequestController@update')->name('update');

    // Delete specified seller request
    Route::post('delete', 'SellerRequestController@delete')->name('delete');

    // Approve specified seller request with selling price
    Route::post('approve', 'SellerRequestController@approve')->name('approve');
});

// ROUTE GROUP FOR MANAGING SELLERS
Route::prefix('seller')->name('seller.')->namespace('Admin')->group(function() {

    // Returns set of required sellers for page
    Route::get('index', 'SellerController@index')->name('index');

    // Returns the information of specified seller
    Route::post('show', 'SellerController@show')->name('show');
});

// ROUTE GROUP FOR MANAGING EMPLOYEES
Route::prefix('employee')->name('employee.')->namespace('Admin')->group(function(){

    // Returns the set of all employees
    Route::get('index', 'EmployeeController@index')->name('index');

    // Creates an employee
    Route::post('create', 'EmployeeController@create')->name('create');

    // Returns the information of specified employee
    Route::post('show', 'EmployeeController@show')->name('show');

    // Updates the specified employee information
    Route::post('update', 'EmployeeController@update')->name('update');

    // Deletes the specified employee
    Route::post('delete', 'EmployeeController@delete')->name('delete');
});

// ROUTE GROUP FOR MANAGING SUBSCRIPTIONS
Route::prefix('subscription')->name('subscription.')->namespace('WebSite')->group(function() {
    
    // Returns the set of all subscriptions
    Route::get('index', 'SubscriptionController@index')->name('index');

    // Creates a subscription
    Route::post('create', 'SubscriptionController@create')->name('create');

    // Returns information of specified subscription
    Route::post('show', 'SubscriptionController@show')->name('show');

    // Updates the information of specified subscription
    Route::post('update', 'SubscriptionController@update')->name('update');

    // Deletes specified subscription
    Route::post('delete', 'SubscriptionController@delete')->name('delete');
});

// ROUTE GROUP FOR MANAGING BEST OFFERS
Route::prefix('best_offer')->name('best_offer.')->namespace('WebSite')->group(function() {
    
    // Returns the set of all best offers
    Route::get('index', 'BestOfferController@index')->name('index');

    // Creates a best offer
    Route::post('create', 'BestOfferController@create')->name('create');

    // Returns information of specified best offer
    Route::post('show', 'BestOfferController@show')->name('show');

    // Deletes specified best offer
    Route::post('delete', 'BestOfferController@delete')->name('delete');
});

// ROUTE GROUP FOR MANAGING FEATURED LISTINGS
Route::prefix('featured_listing')->name('featured_listing.')->namespace('WebSite')->group(function() {
    
    // Returns the set of all featured listings
    Route::get('index', 'FeaturedListingController@index')->name('index');

    // Creates a featured listing
    Route::post('create', 'FeaturedListingController@create')->name('create');

    // Returns information of specified featured listing
    Route::post('show', 'FeaturedListingController@show')->name('show');

    // Deletes specified featured listing
    Route::post('delete', 'FeaturedListingController@delete')->name('delete');
});

// ROUTE GROUP FOR MANAGING TESTIMONIALS
Route::prefix('testimonial')->name('testimonial.')->namespace('WebSite')->group(function() {
    
    // Returns the set of all testimonials
    Route::get('index', 'TestimonialController@index')->name('index');

    // Creates a testimonials
    Route::post('create', 'TestimonialController@create')->name('create');

    // Returns information of specified testimonials
    Route::post('show', 'TestimonialController@show')->name('show');

    // Updates the information of specified testimonials
    Route::post('update', 'TestimonialController@update')->name('update');

    // Deletes specified testimonials
    Route::post('delete', 'TestimonialController@delete')->name('show');
});

// ROUTE GROUP FOR MANAGING WEBSITE CONTENT
Route::prefix('website_content')->name('website_content.')->namespace('WebSite')->group(function() {
    
    // Returns the set of all web site contents
    Route::get('index', 'ContentController@index')->name('index');

    // Creates a web site content
    Route::post('create', 'ContentController@create')->name('create');

    // Returns information of specified web site content
    Route::post('show', 'ContentController@show')->name('show');

    // Updates the information of specified web site content
    Route::post('update', 'ContentController@update')->name('update');

    // Deletes specified web site content
    Route::post('delete', 'ContentController@delete')->name('delete');
});


// ROUTE GROUP QUERYING RESOURCES
Route::prefix('resource')->name('resource.')->namespace('WebSite')->group(function() {

    // Get the set of all makes
    Route::get('get_makes_all', 'QueryController@getMakeList')->name('make_list');

    // Get the set of models for specified make
    Route::get('get_models', 'QueryController@getModelList')->name('model_list');
});


// Essential routes to views
Route::get('/car_listing/form_add', function() {return view('admin.vehicles.addVehicle');})->name('car_listing.form_add');