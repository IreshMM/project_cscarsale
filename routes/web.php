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
Route::get('/sell', function () {
    return view('vehicles.sell');
});
Route::get('/addVehicle', function () {
    return view('vehicles.addVehicle');
});
Route::get('/updateVehicle', function () {
    return view('vehicles./updateVehicle');
});
Route::get('/viewVehicle', function () {
    return view('vehicles./viewVehicle');
});
Route::get('/viewSold', function () {
    return view('vehicles./viewSoldVehicle');
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
Route::get('/employee', function () {
    return view('Users.Employee');
});
Route::get('/empAdd', function () {
    return view('Users.addEmployee');
});
Route::get('/updateEmp', function () {
    return view('Users.updateEmp');
});
Route::get('/viewEmp', function () {
    return view('Users.viewEmp');
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
Route::get('/tos', function () {
    return view('Website.TOS');
});