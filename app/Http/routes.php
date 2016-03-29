<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
// auth route

Route::group(['middleware' => 'web'], function(){
	Route::group(['middleware' => 'auth.login:true'], function(){
		Route::get('logout', 'AuthController@logout');
		Route::group(['middleware' => 'role:admin'], function(){
			Route::get('admin/index', 'AdminController@index');
		});
	});
	Route::group(['middleware' => 'auth.login:false'], function(){
		Route::get('login', 'AuthController@login');
		Route::post('login', 'AuthController@authenticate');
		Route::get('signup', 'AuthController@signup');
	});	
});


// admin route
