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
Route::get('/test', 'testcontroler@do');
Route::get('/user', 'UserController@index');
Route::view('/error','error');

Route::get('/home', 'HomeController@index')->name('home');
