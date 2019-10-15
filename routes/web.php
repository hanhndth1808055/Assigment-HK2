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

Route::get('/', "Client@viewHome");

Route::prefix('admin')->group( function () {
    Route::get('addcoment' ,"MyController@scholarshipComent")->name('scholarship.coment');
    Route::post('addcoment' ,"MyController@scholarshipSaveComent")->name('scholarship.coment');

    Route::get('scholars-ship' , "MyController@SCLList");
    Route::get('coment',"MyController@coment");

    Route::get('addcountry',"MyController@addCountry");
    Route::post('addcountry',"MyController@saveCountry");

    Route::get('addunit',"MyController@addUnit");
    Route::post('addunit',"MyController@saveUnit");

    Route::get('add-scholarship',"MyController@addScholar");
    Route::post('add-scholarship',"MyController@saveScholar");
    Route::get('editscholarship',"MyController@editScholarship");
    Route::post('editscholarship',"MyController@updateScholarship");
    Route::get('hide_scholarship/{id}',"MyController@hideScholarship");
    Route::get('show_scholarship/{id}',"MyController@showScholarship");
    Route::get('registerScholarship/{id}',"Client@registerScholarship");

    Route::get('scholarshipRegister',"MyController@addregister")->name('scholarship.register');
    Route::post('scholarshipRegister',"MyController@saveRegisterScholarship")->name('scholarship.register');
    Route::get('listRegister',"MyController@listRegister");

    Route::get('delete/{id}',"MyController@deletescholarship");
    Route::get('deletecoment/{id}',"MyController@deletecoment");
    Route::get('hide_coment/{id}',"MyController@hideComent");
    Route::get('show_coment/{id}',"MyController@showComent");
});
Route::get('/scholars-ship', "Client@viewScholarship") ;
Route::get('/detai/{id}',"Client@viewDetais" );



Route::get('gallery', 'GalleryController@showGallery');
Route::get('campaigns', 'CampaignsController@showCampaigns');

//coment scholarship
Route::get('/load-coment-scholarship', "Client@loadComentScholarship");

Route::get('admin', function (){
    return view('admin.gallery-admin');
});


Route::get('chart', function (){
    return view('admin.chart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
