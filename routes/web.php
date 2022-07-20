<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/send-email', [EmailController::class, 'sendEmail']);


Route::controller(HomeController::class)->group(function (){
    Route::get('/',  'showHome')->name('home');
    Route::get('/home',  'showHome');
    Route::get('/about', 'showAboutPage')->name('about');
    Route::get('/profile', 'showProfilePage')->name('profile')->middleware('auth');
    Route::post('/profile', 'updateProfile')->name('updateProfile')->middleware('auth');
});
//donation controller group for the users
Route::controller(DonationController::class)->group(function (){
    Route::get('/donate',  'showDonatePage')->name('donate')->middleware('auth');
    Route::post('/donate',  'makeDonation')->name('makeDonation')->middleware('auth');
    Route::get('/donations', 'showDonationsPage')->name('public.donations')->middleware('auth');
    Route::post('/donation/request', 'requestForItem')->name('requestForItem')->middleware('auth');
    Route::get('/my-donations', 'showUserDonations')->name('show-user-donations')->middleware('auth');
    Route::post('/my-donations', 'getUserDonations')->name('get-user-donations')->middleware('auth');
    Route::get('/donation-details/{id}', 'getDonationDetails')->name('get-donation-details')->middleware('auth');
    Route::get('/my-donation-requests', 'myDonationRequests')->name('myDonationRequests');
    Route::get('/my-donation-requests/{id}/details', 'myDonationRequestsDetails')->name('myDonationRequestsDetails');
    Route::post('/my-donation-requests/{id}/update', 'myDonationRequestsUpdate')->name('myDonationRequests.update');
    Route::get('/receiveRequest', 'receiveRequest')->name('receiveRequest')->middleware('auth');
    Route::get('/receiveRequest/{id}/details', 'receiveRequestDetails')->name('receiveRequest.details');
    Route::post('/receiveRequest/{id}/update', 'receiveRequestUpdate')->name('receiveRequest.update');

});

//contact controller
Route::controller(ContactController::class)->group(function (){
    Route::get('/contact', 'showContactPage')->name('contact');
    Route::post('/contact', 'sendContactMessage')->name('sendContactMessage');
});

//dashboard prefix
Route::prefix('/dashboard')->middleware(['auth', 'isAdmin'])->group(function () {
    //dashboard controller for the admins
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'showDashboard')->name('dashboard');
    });
    //donation controller group for admins
    Route::controller(DonationController::class)->group(function () {
        Route::get('/donations', 'showDonations')->name('donations');
        Route::get('/donation/{id}', 'donationDetails')->name('donation.details');
        Route::post('/donation/{id}/update', 'updateDonationDetails')->name('updateDonationDetails');
        Route::get('/donation/types', 'showDonationTypes')->name('donationTypes');
        Route::get('/donation/types/fetch', 'fetchDonationTypes')->name('fetchTypes');
        Route::get('/donation/type/add', 'showDonationTypes')->name('addDonationType');
        Route::post('/donation/type/add', 'addDonationType')->name('insertDonationType');
        Route::get('/donation/type/edit/{id}', 'editType')->name('editType');
        Route::put('/donation/type/update/{id}', 'updateType')->name('updateType');
        Route::delete('/donation/type/delete/{id}', 'deleteType')->name('deleteType');

    });
//user controller group for admins
    Route::controller(UsersController::class)->group(function () {
        Route::get('/users', 'showUsers')->name('users');
        Route::get('/fetch-users', 'fetchUsers')->name('fetchUsers');
        Route::get('/user/{id}', 'getSingleUser')->name('getSingleUser');
        Route::post('/addUser', 'addUser')->name('addUser');
        Route::get('/editUser/{id}', 'editUser')->name('editUser');
        Route::put('/updateUser/{id}', 'updateUser')->name('updateUser');
        Route::delete('/deleteUser/{id}', 'deleteUser')->name('deleteUser');
    });

    Route::controller(SettingController::class)->group(function () {
        Route::get('/settings', 'showSettingsPage')->name('settings');
        Route::post('/settings/update', 'update')->name('settings.update');
    });

    Route::controller(SliderController::class)->group(function () {
        Route::get('/sliders', 'viewSliders')->name('sliders');
        Route::get('/slider/add', 'addSlider')->name('sliders.add');
        Route::post('/slider/add', 'insertSlider')->name('sliders.insert');
        Route::get('/slider/{id}/edit', 'editSlider')->name('sliders.edit');
        Route::post('/slider/{id}/update', 'updateSlider')->name('sliders.update');
        Route::get('/slider/{id}/delete', 'deleteSlider')->name('sliders.delete');
    });
    Route::controller(PageController::class)->group(function () {
        Route::get('/pages', 'viewPages')->name('pages');  //view all pages
        Route::get('page/{id}', 'viewPage')->name('page.view'); //view single page
        Route::get('/page/{id}/edit', 'editPage')->name('pages.edit'); //edit page
        Route::post('/page/{id}/update', 'updatePage')->name('pages.update'); //update page
    });
});


Auth::routes();




