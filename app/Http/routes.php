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

Route::get('/indexpublicize', 'PublicizeController@indexnew');

Route::get('/publicizes','PublicizeController@indexpublicizes');

Route::get('/template',function(){
  return view('elderly/template');
});


Route::get('/home', function () {
    return view('elderly/home');
});

Route::get('/addpublicizes', function () {
    return view('elderly/addpublicizes');
});

Route::get('/publicizes', function () {
    return view('elderly/publicizes');
});


