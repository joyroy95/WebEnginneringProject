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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Home', function()
{
	return view('Home');
});

Route::get('Registration', 'RegistrationController@index')->name('Registration');
Route::post('Registration','RegistrationController@store');

Route::get('Login', 'RegistrationController@index2')->name('Login');

Route::post('Login','RegistrationController@login');

Route::get('/logout', function() {
	Auth::logout();
	return Redirect::to('Login');
});

Route::get('/Apply', function()
{
	return view('Apply');
});

Route::get('/ApplicantHome', function()
{
	return view('ApplicantHome');
});