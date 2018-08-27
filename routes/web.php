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
    return view('pages.home');
});

Route::get('about-us','AboutUsController@getAbout');
Route::get('real-estate','RealEstateController@getRealEstate');
Route::get('services','ServicesController@getServices');
Route::get('news','NewsController@getNews');
Route::get('contact-us','ContactUsController@getContact');
Route::get('detail','RealEstateController@getDetailRealEstate');
