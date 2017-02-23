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

Route::get('/publicizes','PublicizeController@indexPublicizes');

Route::get('/about','StoryController@about');

Route::get('/indexElderlies','ElderlyController@indexelderly');

Route::get('/addPublicizes','PublicizeController@addForm');

Route::post('/addPublicize','PublicizeController@addPublicizes');

Route::get('/addDonate','DonateController@addForm');




Route::get('/ie', function() {
    return view('elderly/indexelderly');
});


Route::get('/home', function() {
    return view('elderly/home');
});
