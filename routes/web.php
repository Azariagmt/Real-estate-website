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
})->name('landing-page');

Route::get('/contact', 'ContactController@getContactForm')->name('contact');

Route::get('/aboutUs', function () {
    return view('about');
})->name('about');

Route::get('/properties', 'PropertyController@getPropertiesPage')->name('property');

Route::get('/properties/{property}', 'PropertyController@getSelectedPropertiesPage')->name('property-selected');