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

Route::get('/', function () {
    return view('frontend.pages.welcome');
});

Route::get('startup', function () {
    return view('frontend.pages.startup');
});

Route::get('startup-technician', function () {
    return view('frontend.pages.startup-technician');
});

Route::get('startup-customer', function () {
    return view('frontend.pages.startup-customer');
});
