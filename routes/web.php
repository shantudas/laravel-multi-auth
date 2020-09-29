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

/*Route::group('user', function () {
    Route::get('login', 'Auth\User\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\User\LoginController@login');
    Route::post('logout', 'Auth\User\LoginController@logout')->name('logout');
});*/

Route::get('login', 'Auth\User\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\User\LoginController@login');
Route::post('logout', 'Auth\User\LoginController@logout')->name('logout');

//Auth::routes();
Route::get('/dashboard', 'User\DashboardController@index')->name('dashboard');
