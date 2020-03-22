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

Route::get('/aboutUs', 'AboutPageController@getAboutPage')->name('about');

Route::get('/properties', 'PropertyController@getPropertiesPage')->name('property');

Route::get('/properties/{property}', 'PropertyController@getSelectedPropertiesPage')->name('property-selected');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/search-algolia', 'PropertyController@searchAlgolia')->name('search-algolia');
Route::get('pagenotfound', 'HomeController@pageNotFound')->name('not-found');

Route::get('/selling','PropertyController@getSellingPage')->name('selling');

Route::get('/multiuploads', 'UploadController@uploadForm');
Route::post('/multiuploads', 'UploadController@uploadSubmit');

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('yenebet12@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});

Route::group(['prefix' => 'laravel-filemanager', 
'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();});

