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

//Auth::routes();

Route::get('login', 'Auth\User\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\User\LoginController@login');
Route::post('logout', 'Auth\User\LoginController@logout')->name('logout');
Route::get('register', 'Auth\User\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\user\RegisterController@register');
Route::get('dashboard', 'User\DashboardController@index')->name('dashboard');


Route::prefix('author')->group(function () {
    Route::get('login', 'Auth\Author\LoginController@showLoginForm')->name('author.login');
    Route::post('login', 'Auth\Author\LoginController@login');
    Route::post('logout', 'Auth\Author\LoginController@logout')->name('author.logout');
    Route::get('register', 'Auth\Author\RegisterController@showRegistrationForm')->name('author.register');
    Route::post('register', 'Auth\Author\RegisterController@register');
    Route::get('dashboard', 'Author\DashboardController@index')->name('author.dashboard');
});

Route::prefix('admin')->group(function () {
    Route::get('login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\Admin\LoginController@login');
    Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');
    Route::get('register', 'Auth\Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Auth\Admin\RegisterController@register');
    Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
});