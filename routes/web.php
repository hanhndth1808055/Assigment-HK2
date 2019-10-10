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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/scholars-ship', "Client@viewScholarship") ;

Route::get('admin/scholars-ship' , "MyController@SCLList");

Route::get('addcountry',"MyController@addCountry");
Route::post('addcountry',"MyController@saveCountry");

Route::get('addunit',"MyController@addUnit");
Route::post('addunit',"MyController@saveUnit");

Route::get('add-scholarship',"MyController@addScholar");
Route::post('add-scholarship',"MyController@saveScholar");

