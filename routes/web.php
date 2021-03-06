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
Route::view('confidentialite', 'confidentialite');
Route::view('cgu', 'cgu');
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');
Route::view('palteforme', 'home');
Route::view('compte','compte');
Auth::routes();
Route::get('/test', 'testcontroler@do'); //test
Route::get('/user', 'UserController@index');
Route::view('/error','error');
Route::get('/home', 'HomeController@index')->name('home');

// Routes for form and generation of PDF
Route::get('formPdf', 'FormPdfController@index');
Route::post('genPdf', 'PDFMaker@gen');

Route::get('/testNotif', 'testControlleurNotif@main');

Route::get('/testPivotTable','EventController@index'); //test
Route::get('/testboutonselect/{event}', 'EventController@selectEvent')->name('testboutonselect'); //test

Route::get('/globalView','eventController@globalView')->name('globalView'); //real
// validation etudiant
Route::get('/listEtu', 'UserController@list')->name('list');

Route::get('/delUser/{user}', 'UserController@deleteInvalidUser')->name('delUser');

Route::get('/valUser/{user}', 'UserController@validUser')->name('valUser');


// vue générale event
Route::get('/tableEvent', 'EventController@listEvent');
    // info event
Route::get('/infoEvent/{event}', 'EventController@infoEvent')->name('infoEvent');

Route::get('/manageEvent/{event}', 'EventController@manageEvent')->name('manageEvent');

Route::get('/addUserToEvent/{user}', 'EventController@addUserToEvent')->name('addUserToEvent');

Route::get('/removeUserFromEvent/{user}', 'EventController@removeUserFromEvent')->name('removeUserFromEvent');

Route::get('/selectEvent/{user}', 'EventController@selectEvent')->name('selectEvent');
