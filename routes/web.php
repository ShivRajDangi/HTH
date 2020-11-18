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

Auth::routes();

Route::get('/customer-home', 'Auth\HomeController@index')->name('home');
Route::post('/customer/logout', 'Auth\LoginController@customerLogout')->name('customer.logout');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/query-submit', 'Auth\LoginController@querySubmit')->name('query.submit');

Route::prefix('admin')->group( function () {

	//dashboard route
	Route::get('/','Auth\AdminController@index')->name('admin.dashboard');

	//login route
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');

	//logout route
	Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

	//register route
	/*Route::get('/register','Auth\AdminRegisterController@showRegisterForm')->name('admin.register');*/
	/*Route::post('/register','Auth\AdminRegisterController@register')->name('admin.register.submit');*/
});

Route::prefix('technician')->group( function () {

	//dashboard route
	Route::get('/','Auth\TechnicianController@index')->name('technician.dashboard');

	Route::get('technician-signup-2', function () {
    return view('technician.technician-signup-2');
});

	//login route
	Route::get('/login','Auth\TechnicianLoginController@showLoginForm')->name('technician.login');
	Route::post('/login','Auth\TechnicianLoginController@login')->name('technician.login.submit');

	//logout route
	Route::post('/logout','Auth\TechnicianLoginController@logout')->name('technician.logout');

	//register route
	Route::get('/register','Auth\TechnicianRegisterController@showRegisterForm')->name('technician.register');
	Route::post('/register','Auth\TechnicianRegisterController@register')->name('technician.register.submit');
});


/*Route::post('admin-login', 'Auth\AdminLogin@adminLogin');
Route::post('technician-login', 'Auth\TechnicianLogin@technicianLogin');
Route::post('customer-login', 'Auth\LoginController@login');*/
/*
Route::group(['middleware' => 'auth:technician'], function () {
Auth::routes();
Route::view('/technician', 'technician');
});
Route::group(['middleware' => 'auth:admin'], function () {
Auth::routes();
Route::view('/admin', 'admin');
});*/
