<?php

use Illuminate\Support\Facades\Route;


route::get('/index', function () {
    return view('index');
}); 


route::get('/features', function () {
    return view('features');
}); 

route::get('/customers', function () {
    return view('customers');
}); 
route::get('/customers', function () {
    return view('customers');
}); 

route::get('/simcards', function () {
    return view('simcards');
}); 
route::get('/contact', function () {
    return view('contact');
}); 
route::get('/billing', function () {
    return view('billing');
}); 
route::get('/Login', function () {
    return view('Login');
}); 