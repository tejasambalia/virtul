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

Route::get('/', function () {
    return view('welcome');
});
//Signup landing page
Route::get('/signup', function () {
    return view('users.signup');
});
//Signin landing page
Route::get('/signin', function () {
    return view('users.signin');
});

Route::post('handleSignin', function () {
    return view('users.signin');
});
//handle signup
Route::post('/handleSignup', ['as' => 'handleSignup', 'uses' =>'UsersController@store']);


