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
    return view('accueil');
});
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');
Route::get('change-password', 'ChangerPasswordController@index');
Route::view('palteforme', 'home');
Route::view('compte','compte');
Route::post('change-password', 'ChangerPasswordController@store')->name('change.password');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('invoice/{invoice}', 'PdfController');
