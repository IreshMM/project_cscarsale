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
    return view('welcome');
});

Route::get('/test', function () {
    return view('testviews.test');
});
Route::get('/vehicles', function () {
    return view('vehicles.AvailableVehicles');
});
Route::get('/request', function () {
    return view('vehicles.Request');
});
Route::get('/sold', function () {
    return view('vehicles.sold');
});
Route::get('/sellers', function () {
    return view('Users.sellers');
});
Route::get('/sub', function () {
    return view('Users.subscription');
});
Route::get('/contact', function () {
    return view('Website.contact');
});
Route::get('/home', function () {
    return view('Website.homePage');
});
Route::get('/testimonials', function () {
    return view('Website.testimonials');
});