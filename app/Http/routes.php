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

Route::get('/detailElderly/{id}', 'ElderlyController@detailElderly');

Route::get('/addPublicizes', 'PublicizeController@addForm');

Route::post('/addPublicize', 'PublicizeController@addPublicizes');

Route::get('/indexActivity', 'PublicizeController@indexactivity');

Route::get('/indexProblems', 'ProblemController@indexProblems');


Route::get('/detailActivity/{id}', 'PublicizeController@detailActivity');

Route::get('/detailPublicizes/{id}', 'PublicizeController@detailPublicize');


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

Route::get('/elderlyForm', 'ElderlyController@elderlyForm');

Route::post('/addElderly', 'ElderlyController@addElderly');

Route::get('/detailFile/{$id}', 'ElderlyController@detailFile');

Route::get('/activityForm/{id}', 'PublicizeController@editForm');

Route::post('/editActivity/{id}', 'PublicizeController@editActivity');

Route::get('/editElderly/{id}', 'ElderlyController@editForm');

Route::post('/editElderly/{id}', 'ElderlyController@editElderly');

Route::get('/detailFile/{id}', 'ElderlyController@detailFile');

Route::get('/activity/delete/{id}', 'PublicizeController@deleteActivity');

Route::get('/elderly/delete/{id}', 'ElderlyController@deleteElderly');

Route::get('/editFormPublicizes/{id}', 'PublicizeController@editFormPublicizes');

Route::post('/editPublicize/{id}', 'PublicizeController@editPublicizes');

Route::get('/publicize/delete/{id}', 'PublicizeController@deletePublicize');

Route::get('/delete/image/{id}', 'PublicizeController@deleteImage');