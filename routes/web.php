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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('query')->group(function(){
    Route::get('makelist', 'SearchController@getMakeList')->name('make_list');
    Route::get('modellist', 'SearchController@getModelList')->name('model_list');
});

Route::get('/search', 'SearchController@search')->name('search');