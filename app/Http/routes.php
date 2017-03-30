<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/home', 'PublicizeController@indexNew');

Route::get('/publicizes', 'PublicizeController@indexPublicizes');

Route::get('/about', 'StoryController@about');

Route::get('/indexElderlies', 'ElderlyController@indexElderly');


Route::get('/detailElderlies', 'ElderlyController@detailElderly');


Route::get('/addPublicizes', 'PublicizeController@addForm');

Route::post('/addPublicize', 'PublicizeController@addPublicizes');

Route::get('/indexActivity', 'PublicizeController@indexactivity');

Route::get('/indexDonate','DonateController@indexDonate');

Route::get('/detailDonate/{id}', 'DonateController@detailDonate');


Route::get('/addDonate', function() {
    return view('elderly/addDonate');
});


Route::get('/contact', function() {
    return view('elderly/contact');
});

<<<<<<< HEAD
Route::get('/indexdonate', function() {
    return view('elderly/indexdonate');
=======
Route::get('/indexProblems', function() {
    return view('elderly/indexProblems');
>>>>>>> feature/Feature-1
});

