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

Route::get('admin/dashboard', function() {return view('admin.testviews.test');})->name('admin.home');

// ROUTE GROUP FOR CAR MANAGING CAR LISTINGS
Route::prefix('admin/dashboard/car_listing')->name('car_listing.')->namespace('Listing')->group(function() {

    // Returns a set of required car listings for page
    Route::get('index', 'CarListingController@index')->name('index');;

    // Creates a new car listing
    Route::post('create', 'CarListingController@create')->name('create');

    // Update a car listing
    Route::get('update_form', 'CarListingController@updateForm')->name('update_form');
    Route::post('update', 'CarListingController@update')->name('update');

    // Sell the specified car listing
    Route::get('sell_form', 'CarListingController@sellForm')->name('sell_form');
    Route::post('sell', 'CarListingController@sell')->name('sell');
});

// ROUTE GROUP FOR MANAGING SELLER REQUESTS
Route::prefix('admin/dashboard/seller_request')->name('seller_request.')->namespace('Listing')->group(function(){

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
Route::prefix('admin/dashboard/seller')->name('seller.')->namespace('Admin')->group(function() {

    // Returns set of required sellers for page
    Route::get('index', 'SellerController@index')->name('index');

    // Returns the information of specified seller
    Route::post('show', 'SellerController@show')->name('show');
});

// ROUTE GROUP FOR MANAGING EMPLOYEES
Route::prefix('admin/dashboard/employee')->name('employee.')->namespace('Admin')->group(function(){

    // Returns the set of all employees
    Route::get('index', 'EmployeeController@index')->name('index');

    // Creates an employee
    Route::get('create', 'EmployeeController@showCreateForm')->name('create-form');
    Route::post('create', 'EmployeeController@create')->name('create');

    // Returns the information of specified employee
    Route::post('show', 'EmployeeController@show')->name('show');

    // Updates the specified employee information
    Route::get('update', 'EmployeeController@showUpdateForm')->name('update-form');
    Route::post('update', 'EmployeeController@update')->name('update');

    // Deletes the specified employee
    Route::post('delete', 'EmployeeController@delete')->name('delete');
});

// ROUTE GROUP FOR MANAGING SUBSCRIPTIONS
Route::prefix('admin/dashboard/subscription')->name('subscription.')->namespace('WebSite')->group(function() {

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
Route::prefix('admin/dashboard/best_offer')->name('best_offer.')->namespace('WebSite')->group(function() {

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
Route::prefix('admin/dashboard/website_content')->name('website_content.')->namespace('Admin')->group(function() {

    // Returns the view for managing home page of the client website
    Route::get('index', 'WebSiteController@index')->name('index');

    // Returns the view for updating contact details displayed on the website
    Route::get('contact', 'WebSiteController@contact')->name('contact');
    // Set contact details
    Route::post('set_contact', 'WebSiteController@setContact')->name('set_contact');

    // Returns the view for updating Terms of service  on website
    Route::get('tos', 'WebSiteController@tos')->name('tos');
    Route::post('set_tos', "WebSiteController@setTos")->name('set_tos');


    //Set welcome note and title
    Route::post('set_welcome', 'WebSiteController@setWelcomeNote')->name('set_welcome');

    // Returns the view for viewing and approving testimonials
    Route::get('testimonials', function() {return view('admin.website.testimonials');})->name('testimonials');
});


// ROUTE GROUP QUERYING RESOURCES
Route::prefix('admin/dashboard/resource')->name('resource.')->namespace('WebSite')->group(function() {

    // Get the set of all makes
    Route::get('get_makes_all', 'QueryController@getMakeList')->name('make_list');

    // Get the set of models for specified make
    Route::get('get_models', 'QueryController@getModelList')->name('model_list');

    // Get the list of sold cars
    Route::get('sold_cars', 'QueryController@getSoldCarList')->name('sold_car_list');
});


// Essential routes to views
Route::get('/car_listing/form_add', function() {return view('admin.vehicles.addVehicle');})->name('car_listing.form_add');
Route::get('/car_listing/form_update', function() {return view('admin.vehicles.updatevehicle');})->name('car_listing.form_update');
Route::get('/car_listing/form_sell', function() {return view('admin.vehicles.sell');})->name('car_listing.form_sell');
Route::get('/resource/sold_table', function() {return view('admin.vehicles.sold');})->name('car_listing.sold');


Route::get('/', function () {
    return view('website.pages.public.welcome');
})->name('home');
Route::get('/search2', function () {
    return view('website.pages.search');
});
Route::get('/details', function () {
    return view('website.pages.public.cardetails');
});
Route::get('/contact', function () {
    return view('website.pages.public.contact');
});
Route::get('/test', function () {
    return view('website.testviews.test');
});
Route::get('/test2', function () {
    return view('website.testviews.test2');
});
Route::prefix('query')->group(function(){
    Route::get('makelist', 'WebSite\QueryController@getMakeList')->name('make_list');
    Route::get('modellist', 'WebSite\QueryController@getModelList')->name('model_list');
});
Route::get('/search', 'WebSite\QueryController@search')->name('search');


//Test route
Route::get('test', function() {return view('admin.users.subscription');});
