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
    return view('welcome');
});
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');
Route::view('palteforme', 'home');
Route::view('compte','compte');
Auth::routes();

Route::resource('user', 'UserController');



Route::get('/profil', 'ChangerPasswordController@index');
Route::post('/profil', 'ChangerPasswordController@store')->name('change.password');

Route::get('/home', 'homeController@index');
Route::resource('post', 'PostController', ['except' => ['show', 'edit', 'update']]);

Route::get('formPdf', 'FormPdfController@index');
Route::post('genPdf', 'PDFMaker@gen');
