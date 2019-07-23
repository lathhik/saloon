<?php

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
    return view('index');
});

Route::prefix('frontend')->group(function () {
    Route::get('/', 'FrontendController@index');
    Route::get('about', 'FrontendController@about');
    Route::get('contact', 'FrontendController@contact');
    Route::get('team', 'FrontendController@team');
    Route::get('service', 'FrontendController@service');
    Route::post('createClient', 'FrontendController@store');


});

Route::prefix('backend2')->group(function () {
    Route::get('/', 'SaloonController@index');
    Route::post('/createAdmin', 'SaloonController@store');


    Route::prefix('staff')->group(function () {
        Route::get('listStaff', 'StaffController@viewStaff');
        Route::get('register', 'StaffController@create');
        Route::post('storeStaff', 'StaffController@store');
    });
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
