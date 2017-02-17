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

Route::get('/home', 'PublicizeController@indexnew');

Route::get('/publicizes','PublicizeController@indexpublicizes');

Route::get('/about','StoryController@about');

Route::get('/indexElderlies','ElderlyController@indexelderly');

Route::get('/addpublicizes', function() {
    return view('elderly/addpublicizes');
});



Route::get('/ie', function() {
    return view('elderly/indexelderly');
});


Route::get('/home', function() {
    return view('elderly/home');
});
