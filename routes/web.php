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
Route::get('/test', 'testcontroler@do'); //test
Route::get('/user', 'UserController@index');
Route::view('/error','error');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testNotif', 'testControlleurNotif@main');

Route::get('/test','EventController@test'); //test
Route::get('/testboutonselect/{event}', 'EventController@selectEvent')->name('testboutonselect'); //test

Route::get('/globalView','eventController@globalView')->name('globalView'); //real

// validation etudiant
Route::get('/listEtu', 'UserController@list')->name('list');
    //del invalid user
Route::get('/delUser/{user}', 'UserController@deleteInvalidUser')->name('delUser');
    // approve valid user
Route::get('/valUser/{user}', 'UserController@validUser')->name('valUser');


// vue générale event
Route::get('/tableEvent', 'EventController@listEvent')->name('listEvent');
    // info event
Route::get('/infoEvent/{event}', 'EventController@infoEvent')->name('infoEvent');
    //manage event
Route::get('/manageEvent/{event}', 'EventController@manageEvent')->name('manageEvent');
    //add an user from a event
Route::get('/addUserToEvent/{user}/{event}', 'EventController@addUserToEvent')->name('addUserToEvent');
    //remove an user from a event
Route::get('/removeUserFromEvent/{user}/{event}', 'EventController@removeUserFromEvent')->name('removeUserFromEvent');

Route::get('/selectEvent/{user}', 'EventController@selectEvent')->name('selectEvent');


// creer un event
Route::view('/newEvent','newEvent');
Route::any('/createEvent', 'EventController@createEvent')->name('createEvent');

// code Hymed creation/modification/suppression d'event

Route::get('/event', 'EventController@index')->name('event.index');
Route::post('/event', 'EventController@store')->name('event.store');
Route::get('/event/create', 'EventController@create')->name('event.create');

Route::get('/event/{event}/edit', 'EventController@edit')->name('event.edit');

Route::put('/event/{event}', 'EventController@update')->name('event.update');
Route::delete('/event/{event}', 'EventController@destroy')->name('event.delete');

//

/////////////////////////////
/////   TEST    ////////////
////////////////////////////

Route::get('/test', 'TestController@index')->name('test');
