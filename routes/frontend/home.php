<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ListingController;
/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');
//image showing
Route::get('showframed', [ListingController::class, 'showImage'])->name('showframed');
//end imageshowing by mostofa
/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', [AccountController::class, 'index'])->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
		
		/*
		 * Listing Add 
		 */
		Route::get('addlisting', [ListingController::class, 'create'])->name('addlisting');
		Route::post('addlisting', [ListingController::class, 'store'])->name('addlisting.post'); 
		//Route::get('/addlisting', ['as'=>'addlisting', 'uses'=>'ListingController@create']);
		//Route::post('/addlisting', ['as'=>'addlisting.post', 'uses'=>'ListingController@store']);
		
		Route::get('districtlist', [ListingController::class, 'getdistrict'])->name('district.list'); 
    });
});
