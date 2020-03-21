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

Route::get('/', 'HomeController@getIndex')->name('landing-page');

Route::get('/contact', 'ContactController@getContactForm')->name('contact');

Route::get('/aboutUs', function () {
    return view('about');
})->name('about');

Route::get('/properties', 'PropertyController@getPropertiesPage')->name('property');

Route::get('/properties/{property}', 'PropertyController@getSelectedPropertiesPage')->name('property-selected');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/search-algolia', 'PropertyController@searchAlgolia')
Route::get('pagenotfound', 'HomeController@pageNotFound')->name('not-found');

Route::get('/selling','PropertyController@getSellingPage')->name('selling');

Route::group(['prefix' => 'laravel-filemanager', 
'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();});

