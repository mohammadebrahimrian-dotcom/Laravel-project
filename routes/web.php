
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SimcardController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;


// ==================================
// PUBLIC AWCC WEBSITE ROUTES
// ==================================

Route::view('/index', 'index');
Route::view('/features', 'features');
Route::view('/customers', 'customers');
Route::view('/simcards', 'simcards');
Route::view('/contact', 'contact');
Route::view('/billing', 'billing');
Route::view('/login', 'Login');


// ==================================
// ADMIN LOGIN ROUTE
// ==================================

Route::get('/manage/login', [LoginController::class, 'index'])
    ->name('manage.login');


// ==================================
// RESOURCE ROUTES - MIDTERM PROJECT
// ==================================

Route::prefix('manage')->group(function () {

    Route::resource('customers', CustomerController::class);

    Route::resource('simcards', SimcardController::class);

    Route::resource('billing', BillingController::class);

    Route::resource('contact-messages', ContactMessageController::class);

    Route::resource('users', UserController::class);

    Route::resource('features', FeaturesController::class);

    Route::resource('services', ServiceController::class);

});
