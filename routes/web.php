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
//client

Route::get('/', "Client@viewHome");
Route::get('/scholarship', "Client@viewScholarship") ;
Route::get('/detai/{id}',"Client@viewDetais" );
Route::get('registerScholarship/{id}',"Client@registerScholarship");

Route::get('scholarshipRegister',"MyController@addregister")->name('scholarship.register');
Route::post('scholarshipRegister',"MyController@saveRegisterScholarship")->name('scholarship.register');

Route::get('emailcontact',"MyController@addContact")->name('contact');
Route::post('emailcontact',"MyController@saveEmailContact")->name('contact');


Route::get('contactus',"MyController@addContactus")->name('contactus');
Route::post('contactus',"MyController@saveContactus")->name('contactus');

Route::get('contact',"Client@contactUs");


Route::group(['middleware' => 'admin' ,"prefix" => "admin"], function (){
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

    Route::get('listRegister',"MyController@listRegister");

    Route::get('delete/{id}',"MyController@deletescholarship");
    Route::get('deletecoment/{id}',"MyController@deletecoment");
    Route::get('hide_coment/{id}',"MyController@hideComent");
    Route::get('show_coment/{id}',"MyController@showComent");

    /* Seminar */

    Route::get('/addSeminar',"SeminarController@addSeminar");
    Route::post('/addSeminar',"SeminarController@saveSeminar");
    Route::get('/listSeminar',"SeminarController@showListSeminar");

    Route::get('/editSeminar',"SeminarController@editSeminar");
    Route::post('/editSeminar',"SeminarController@updateSeminar");

    Route::get("/deleteSeminar/{id}","SeminarController@deleteSeminar");

    Route::get('/listSeminarRegister',"SeminarController@showListSeminarRegister");

    Route::get('/deleteSeminarRegister/{id}',"SeminarController@deleteSeminarRegister");


    /* Partnership */

    Route::get('/listEmailContact',"MyController@listEmailContact");
    Route::get('/emailcontacted',"Mycontroller@emailContacted");
    Route::get('/emailnotcontacted',"Mycontroller@emailNotcontacted");

    Route::get('contactEmail/{id}','MyController@contactEmail');

    Route::get('addIntroduce',"MyController@addIntroduce");
    Route::post('addIntroduce',"MyController@saveIntroduce");

    Route::get('listIntroduce',"MyController@introduce");

    Route::get('editIntroduce',"MyController@editIntroduce");
    Route::post('editIntroduce',"MyController@updateIntroduce");


    Route::get('/addPartnership',"PartnershipController@addPartnership");
    Route::post('/addPartnership',"PartnershipController@savePartnership");
    Route::get('/listPartnership',"PartnershipController@showListPartnership");

    Route::get('/editPartnership',"PartnershipController@editPartnership");
    Route::post('/editPartnership',"PartnershipController@updatePartnership");

    Route::get("/deletePartnership/{id}","PartnershipController@deletePartnership");

    /* Research */

    Route::get('/addResearch',"ResearchController@addResearch");
    Route::post('/addResearch',"ResearchController@saveResearch");
    Route::get('/listResearch',"ResearchController@showListReaserch");

    Route::get('/editResearch',"ResearchController@editResearch");
    Route::post('/editResearch',"ResearchController@updateResearch");

    Route::get("/deleteResearch/{id}","ResearchController@deleteResearch");

    /* Learn More Research */

    Route::get('/addLearnMoreResearch',"ResearchController@addLearnMoreResearch");
    Route::post('/addLearnMoreResearch',"ResearchController@saveLearnMoreResearch");
    Route::get('/listLearnMoreResearch',"ResearchController@showListLearnMoreResearch");

    Route::get('/editLearnMoreResearch',"ResearchController@editLearnMoreResearch");
    Route::post('/editLearnMoreResearch',"ResearchController@updateLearnMoreResearch");

    Route::get("/deleteLearnMoreResearch/{id}","ResearchController@deleteLearnMoreResearch");

    /* Expert */
    Route::get('/addExpert',"ResearchController@addExpert");
    Route::post('/addExpert',"ResearchController@saveExpert");
    Route::get('/listExpert',"ResearchController@showListExpert");

    Route::get('/editExpert',"ResearchController@editExpert");
    Route::post('/editExpert',"ResearchController@updateExpert");

    Route::get('/deleteExpert/{id}',"ResearchController@deleteExpert");




    Route::get('viewContact',"MyController@viewContactUs");


    /* Gallery */

    Route::get('/campaigns', 'CampaignsController@index')->name('campaigns.list');
//    Route::get('/campaigns/add', 'CampaignsController@add')->name('campaigns.add');
//    Route::post('/campaigns/add', 'CampaignsController@save')->name('campaigns.save');
//    Route::get("/campaigns/update", "AdminController@update")->name('campaigns.update');
//    Route::post("/campaigns/update", "AdminController@updated")->name('campaigns.updated');
//    Route::get("campaigns/delete/{id}", "AdminController@delete")->name('campaigns.delete');
});

Route::get('gallery', 'GalleryController@showGallery');
Route::get('campaigns', 'CampaignsController@showCampaigns');
Route::get('campaigns/{id}', 'CampaignsController@showCampaignDetail');
Route::post('campaigns/charge/{id}', 'CampaignsController@payWithStripe');

//coment scholarship
Route::get('/load-coment-scholarship', "Client@loadComentScholarship");


Route::get('admin', function (){
    return view('admin.gallery-admin');
});
// Seminar
Route::get('seminar',"SeminarController@showSeminar");
Route::get('partnership',"PartnershipController@showPartnership");
Route::get('research',"ResearchController@showResearch");
Route::get('researchDetail',"ResearchController@showResearchDetail");
Route::get('seminarDetail',"SeminarController@showSeminarDetail");
Route::post('addSeminarRegister',"SeminarController@saveSeminarRegister");

Route::get('chart', function (){
    return view('admin.chart');
});

Route::get('user', function (){
    return view('auth.user');
});

Route::get('home', function (){
    return view('auth.user');
})->middleware('admin');

Auth::routes();

Route::get('/admin', 'HomeController@index')->middleware('admin');;


// Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');
Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'HomeController@changeLanguage')
        ->name('user.change-language');
});
