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

Route::get('/', 'MemoController@displayListIndex');

Route::get('register', 'MemoController@displayRegisterIndex');
Route::post('register', 'MemoController@register');

Route::get('delete', 'MemoController@delete');

Route::get('update', 'MemoController@displayUpdateIndex');
Route::post('update', 'MemoController@update');
