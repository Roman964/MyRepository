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

Route::get('/contacts', function () {
  /*  return view('welcome');*/
  return view('contacts');
    
});


Route::get('/', 'IndexController@index');

Route::get('/social', function () {
  /*  return view('welcome');*/
  return view('social');
    
});

   
    
