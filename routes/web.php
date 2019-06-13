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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/register', 'RegisterContoller@index')->name();
Route::get('/register', 'RegisterController@index')->name('register.index');
Route::post('/register/insert', 'RegisterController@insert')->name('register.insert');
Route::get('/register/login', 'RegisterController@login')->name('register.login');
Route::post('/register/logindata', 'RegisterController@logindata')->name('register.logindata');
Route::get('/register/showusers', 'RegisterController@showusers')->name('register.showusers');






Route::get('/home', 'HomeController@index')->name('home');	
