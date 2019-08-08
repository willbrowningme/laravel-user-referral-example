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
    return view('welcome');
});

Route::get('/cookie', function () {
    return Cookie::get('referral');
});

Route::get('/test', function () {
	$email = 'tttwb@hotmail.com';
    return \Hashids::encode($email);;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/referral-link', 'HomeController@referral');

Route::get('/referrer', 'HomeController@referrer');

Route::get('/referrals', 'HomeController@referrals');
