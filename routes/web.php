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
//Auth::routes();

Route::get('login', 'Auth\User\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\User\LoginController@login');
Route::post('logout', 'Auth\User\LoginController@logout')->name('logout');
Route::get('register', 'Auth\User\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\user\RegisterController@register');
Route::get('dashboard', 'User\DashboardController@index')->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::get('login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\Admin\LoginController@login');
    Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');
    Route::get('register', 'Auth\Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Auth\Admin\RegisterController@register');
    Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
});