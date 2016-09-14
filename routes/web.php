<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home/index','HomeController@index');
Route::get('home/id1/{id1}/id2/{id2}','HomeController@getId');
Route::get('home/showview', 'HomeController@showView');

//Peticiones de tipo get y post

//Route::match(["get","post"],"home/form","HomeController@form");
Route::any("home/form", "HomeController@form");