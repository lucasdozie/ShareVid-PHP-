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

/*you can either do this 
*/
Route::get('video', 'videosController@index');
Route::get('video/show', 'videosController@showall');
Route::get('video/get/{name}', ['as' => 'getvideo', 'uses' => 'videosController@get']);
Route::post('video/add',[ 'as' => 'addvideo', 'uses' => 'videosController@add']);

/*
OR THIS
*/

//Route::resource('videos', 'moviesController');
/*Note: you can't use both together */




Route::get('/', 'welcomeController@index');
/*Route for the contact page*/
Route::get('contact', ['as'=>'contact', 'uses'=>'AboutController@create']);
Route::post('contact', ['as'=>'contact_store', 'uses'=>'AboutController@store']);

Route::resource('tasks', 'tasksController');
Route::resource('movies', 'moviesController');
Route::resource('lists', 'listsController');
Route::resource('users', 'usersController');
//Route::get('/home',  ['uses' => 'welcomeController@index', 'middleware' => 'web'])->name('home');
/*Route::controller([
	'lists' => "listsController"
	]);*/
