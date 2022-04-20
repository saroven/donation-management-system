<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;



Route::controller(HomeController::class)->group(function (){
    Route::get('/',  'showHome')->name('home');
    Route::get('/home',  'showHome');
    Route::get('/donate',  'showDonatePage')->name('donate')->middleware(['auth']);
    Route::post('/donate',  'addDonation')->name('addDonation');
    Route::get('/about', 'showAboutPage')->name('about');
    Route::get('/donations', 'showDonationsPage')->name('donations');
    Route::get('/contact', 'showContactPage')->name('contact');
    Route::get('/profile', 'showProfilePage')->name('profile')->middleware(['auth']);
    Route::post('/profile', 'updateProfile')->name('updateProfile')->middleware(['auth']);
});



Route::prefix('/dashboard')->middleware(['auth', 'isAdmin'])->group(function (){

    Route::controller(DashboardController::class)->group(function (){
        Route::get('/', 'showDashboard')->name('dashboard');
    });
        //donation controller group
    Route::controller(DonationController::class)->group(function (){
        Route::get('/donations', 'showDonations')->name('donations');
        Route::get('/donation/types', 'showDonationTypes')->name('donationTypes');
        Route::get('/donation/types/fetch', 'fetchDonationTypes')->name('fetchTypes');
        Route::get('/donation/type/add', 'showDonationTypes')->name('addDonationType');
        Route::post('/donation/type/add', 'addDonationType')->name('insertDonationType');
        Route::get('/donation/type/edit/{id}', 'editType')->name('editType');
        Route::put('/donation/type/update/{id}', 'updateType')->name('updateType');
        Route::delete('/donation/type/delete/{id}', 'deleteType')->name('deleteType');

    });
//user controller group
    Route::controller(UsersController::class)->group(function (){
        Route::get('/users', 'showUsers')->name('users');
        Route::get('/fetch-users', 'fetchUsers')->name('fetchUsers');
        Route::get('/user/{id}', 'getSingleUser')->name('getSingleUser');
        Route::post('/addUser', 'addUser')->name('addUser');
        Route::get('/editUser/{id}', 'editUser')->name('editUser');
        Route::put('/updateUser/{id}', 'updateUser')->name('updateUser');
        Route::delete('/deleteUser/{id}', 'deleteUser')->name('deleteUser');
    });
});


Auth::routes();




