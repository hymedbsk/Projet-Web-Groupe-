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
;
Route::view('compte','compte');
Auth::routes(['verify' => true]);
Route::get('/profil', 'ChangerPasswordController@index')->middleware('verified');
Route::post('/profil', 'ChangerPasswordController@store')->name('change.password');
Route::get('/home', 'homeController@index')->middleware('verified');
Route::resource('post', 'PostController')->middleware('verified');
Route::resource('user', 'UserController')->middleware('verified', 'prof');
Route::get('admin', 'AdminController@index')->name('admin')->middleware('verified');
Route::put('admin/{admin}', 'AdminController@admin')->name('admin.add')->middleware('verified');


Route::get('statut', 'StatutController@index');
Route::put('statut/{statut}', 'StatutController@update')->name('statut.update');
