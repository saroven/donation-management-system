<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'showHome')->name('home');
    Route::get('/home', 'showHome');
    Route::get('/login', 'showHome')->name('login');
    Route::get('/register', 'showHome')->name('register');
    Route::get('/donate', 'showDonatePage')->name('donate');

});
Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');

Auth::routes();

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('admin.pages.upgrade');})->name('upgrade');
	 Route::get('map', function () {return view('admin.pages.maps');})->name('map');
	 Route::get('icons', function () {return view('admin.pages.icons');})->name('icons');
	 Route::get('table-list', function () {return view('admin.pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

