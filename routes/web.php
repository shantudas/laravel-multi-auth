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

//User routes starts here
//Auth::routes();
Route::namespace('Auth\User')->group(function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');
});
Route::namespace('User')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
//User routes starts here

//Author routes starts here
Route::prefix('author')->namespace('Auth\Author')->group(function () {
    Route::get('login', 'LoginController@showLoginForm')->name('author.login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('author.logout');
    Route::get('register', 'RegisterController@showRegistrationForm')->name('author.register');
    Route::post('register', 'RegisterController@register');
});

Route::prefix('author')->namespace('Author')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('author.dashboard');
});
//Author routes ends here


//Admin routes starts here


Route::prefix('admin')->namespace('Auth\Admin')->group(function () {
    Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');
    Route::get('register', 'RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'RegisterController@register');
});

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
});
//Admin routes ends here

