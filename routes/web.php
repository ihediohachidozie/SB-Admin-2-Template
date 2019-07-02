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

Route::get('pages/dashboard', 'PagesController@getDashboard')->name('dashboard');
Route::get('pages/login', 'PagesController@getLogin')->name('login');
Route::get('pages/register', 'PagesController@getRegister')->name('register');
Route::get('pages/forgot-password', 'PagesController@getForgotPassword')->name('forgot-password');
Route::get('pages/blank', 'PagesController@getBlank')->name('blank');
