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

Route::get('/', function () {
    return view('/pages/home');
});

Route::get('/show', function () {
    return view('/pages/show');
});

Route::resource('members','MemberController');

Route::post('members/create','MemberController@create');
Route::post('members/destroy','MemberController@destroy');
Route::post('members/update','MemberController@update');


// Login
Route::resource('login','LoginController');
Route::post('login/check','LoginController@check');


