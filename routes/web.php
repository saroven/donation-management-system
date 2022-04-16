<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;



Route::controller(HomeController::class)->group(function (){
    Route::get('/',  'showHome')->name('home');
    Route::get('/home',  'showHome');
    Route::get('/donate',  'showDonatePage')->name('donate');
    Route::get('/about', 'showAboutPage')->name('about');
    Route::get('/donations', 'showDonationsPage')->name('donations');
    Route::get('/contact', 'showContactPage')->name('contact');
});

Route::controller(DashboardController::class)->group(function (){
    Route::get('/dashboard', 'showDashboard')->name('dashboard');

});

Route::prefix('/dashboard')->middleware('auth')->group(function (){
    Route::controller(DonationController::class)->group(function (){
    Route::get('/donations', 'showDonations')->name('donations');
    Route::get('/donation/types', 'showDonationTypes')->name('donationTypes');
    Route::get('/donation/types/fetch', 'fetchDonationTypes')->name('fetchTypes');
    Route::get('/donation/type/add', 'showDonationTypes')->name('addDonationType');
    Route::post('/donation/type/add', 'addDonationType')->name('insertDonationType');

    });
});


Auth::routes();

Route::get('/users', function (){
    return view('admin.users.users');
})->name('users');



Route::controller(UsersController::class)->group(function (){
    Route::get('/users', 'showUsers')->name('users');
    Route::get('/user/add', 'addUser')->name('addUser');
});
