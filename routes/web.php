<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'website.Welcome')->name('landingpage');
Route::prefix('user')->group(function(){
    Route::view('login','website.login')->name('getLoginForm');
    Route::view('register','website.register')->name('getRegisterForm');
});

Route::prefix('admin')->group(function(){
    Route::view('dashboard','admin.index')->name('admin.dashboard');
    Route::view('users','admin.users')->name('admin.users');
    Route::post('users/show','adminAjaxController@index')->name('fetch_users');
});






// Route::get('stripe', 'stripeController@stripe');
// Route::post('stripe', 'stripeController@stripePost')->name('stripe.post');
