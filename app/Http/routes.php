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

Route::get('/publicizes', 'PublicizeController@indexPublicizes');

Route::get('/about', 'StoryController@about');

Route::get('/editAbout/{id}', 'StoryController@editAbout');

Route::post('/editAbout/{id}', 'StoryController@stroeAbout');

Route::get('/ageChart', 'ElderlyController@ageChart');

Route::get('/indexElderlies', 'ElderlyController@indexElderly');

Route::get('/detailElderlies/{id}', 'ElderlyController@detailElderly');

Route::get('/addPublicizes', 'PublicizeController@addForm');

Route::post('/addPublicize', 'PublicizeController@addPublicizes');

Route::get('/indexActivity', 'PublicizeController@indexactivity');

Route::get('/indexProblems', 'ProblemController@indexProblems');

Route::get('/index', 'PublicizeController@indexNew');
Route::resource('contacts','Contacts\\ContactsController');
Route::resource('donates','Donates\\DonatesController');
Route::resource('problems','Problems\\ProblemsController');
Route::resource('borads','Borads\\BoradsController');

Route::group(['middleware' => ['web']], function () {    
   Route::auth();
   Route::get('/home', 'HomeController@index');
});   

Route::get('/addActivity', 'PublicizeController@formActivity');

Route::post('/addActivity', 'PublicizeController@addActivity');

Route::get('/elderlygraph', 'ElderlyController@elderlyGraph');

Route::get('/gradeChart', 'ElderlyController@criterionGraph');

