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

Route::get('/login','LoginController@getLogin'); 
Route::post('/login','LoginController@postLogin');

//Route::get('/account','AccountController@getListAccount');
Route::group(['prefix'=>'admin','middleware'=>'AdminMiddleware'], function(){
	Route::get('/listaccount','AccountController@getListAccount');
	
});