<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/crem-policy', function () {
    return view('policy');
});

Route::get('/crem-products', function () {
    return view('product.product');
});

Route::get('/crem-services', function () {
    return view('services.services');
});

Route::get('/crem-branches', function () {
    return view('branch');
});

Route::get('/crem-contact', function () {
    return view('contact');
});


// Products CREMIN-CAM
Route::get('/products/crem-mobile-banking', function () {
    return view('product.mobile_banking');
});

Route::get('/products/crem-visa-card', function () {
    return view('product.visa');
});
