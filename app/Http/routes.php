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
Route::get('home',function(){
   return redirect()->back();
});
Route::get('/','HomeController@index'); //it will show the home page
Route:get('admin','AdminController@index'); //it will show the admin page where admin can create hotel information
Route::post('admin/create','AdminController@create'); //it will add the hotel info into database
Route::post('postComment','HomeController@postComment'); //it will add the hotel info into database

Route::get('{hotel}/{id}','HomeController@show'); // display the hotle and its comment individually