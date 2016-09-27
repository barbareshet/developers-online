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

#Pages:
Route::get('/', [
    'uses'  => '\App\Http\Controllers\PagesController@index',
    'as'    => 'home',
]);


//Messages test route
//Route::get('/alert', function(){
//   return redirect()->route('home') ->with('error', 'error');
//});

//Authentication
Route::get('/register', [
    'uses' =>'\App\Http\Controllers\AuthController@getSignup',
    'as'    => 'auth.register',
    
]);

Route::post('/register', [
    'uses' =>'\App\Http\Controllers\AuthController@postSignup',
    ]);


Route::get('/login', [
    'uses' =>'\App\Http\Controllers\AuthController@getLogin',
    'as'    => 'auth.login',
]);

Route::post('/login', [
    'uses' =>'\App\Http\Controllers\AuthController@postLogin',
    
]);