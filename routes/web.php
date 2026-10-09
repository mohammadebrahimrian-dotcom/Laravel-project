
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SimcardController;
use App\Http\Controllers\BillingController;

// Existing AWCC website routes
Route::get('/index', function () {
    return view('index');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/customers', function () {
    return view('customers');
});

Route::get('/simcards', function () {
    return view('simcards');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/billing', function () {
    return view('billing');
});

Route::get('/Login', function () {
    return view('Login');
});

// Resource routes for the assignment
Route::resource('manage/customers', CustomerController::class)
    ->names('customers');

Route::resource('manage/simcards', SimcardController::class)
    ->names('simcards');

Route::resource('manage/billing', BillingController::class)
    ->names('billing');
