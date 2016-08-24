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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'memoController@displayListIndex');

Route::get('register', 'memoController@displayRegisterIndex');
Route::post('register', 'memoController@register');

Route::get('delete', 'memoController@delete');

Route::get('update', 'memoController@displayUpdateIndex');
Route::post('update', 'memoController@update');
