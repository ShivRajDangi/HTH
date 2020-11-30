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
Route::get('/cc', function () {
    Artisan::call('cache:clear');
    echo '<script>alert("cache clear Success")</script>';
    
});
Route::get('/ccc', function () {
    Artisan::call('config:cache');
    echo '<script>alert("config cache Success")</script>';
});
Route::get('/vc', function () {
    Artisan::call('view:clear');
    echo '<script>alert("view clear Success")</script>';
});
Route::get('/cr', function () {
    Artisan::call('route:cache');
    echo '<script>alert("route clear Success")</script>';
});
Route::get('/coc', function () {
    Artisan::call('config:clear');
    echo '<script>alert("config clear Success")</script>';
});
Route::get('/storage123', function () {
    Artisan::call('storage:link');
    echo '<script>alert("linked")</script>';
});




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

Route::get('terms', function () {
    return view('frontend.pages.terms');
});

Route::get('privacy', function () {
    return view('frontend.pages.privacy');
});



Auth::routes();


Route::get('/customer-home', 'Auth\HomeController@index')->name('home');
Route::post('/customer/logout', 'Auth\LoginController@customerLogout')->name('customer.logout');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name('register');
Route::post('/register','Auth\RegisterController@register')->name('customer.register.submit');

Route::post('/customer-query-submit', 'Auth\HomeController@submitQuery')->name('customer.query.submit');

//Google routes
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

Route::any('/customer/single-query/{id}', 'Auth\HomeController@singleQueryPage')->name('customer.single-query');
Route::any('/customer-profile-update','Auth\HomeController@updateProfile')->name('customer.profile.submit');


Route::prefix('admin')->group( function () {

	//dashboard route
	Route::get('/','Auth\AdminController@index')->name('admin.dashboard');
	Route::any('/technician-update/{status}','Auth\AdminController@technicianUpdate')->name('admin.dashboard.technician-update');
	Route::any('/delete-query','Auth\AdminController@queryDeleteById')->name('admin.dashboard.query-delete');

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
	Route::any('/interested-query/{query_id}','Auth\TechnicianController@interestedToQuery')->name('technician.interested');

	Route::get('technician-signup-2', function () {
    return view('technician.technician-signup-2');
	});

	Route::any('/technician-profile-update','Auth\TechnicianController@updateProfile')->name('technician.profile.submit');


	//login route
	Route::get('/login','Auth\TechnicianLoginController@showLoginForm')->name('technician.login');
	Route::post('/login','Auth\TechnicianLoginController@login')->name('technician.login.submit');
	Route::post('/query-submit', 'Auth\LoginController@querySubmit')->name('technician.query.submit');

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
