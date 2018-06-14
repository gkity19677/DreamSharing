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


Auth::routes();


Route::get('/index', 'HomeController@index');
Route::get('/happy', 'DreamSharingController@index');

Route::get('/mydream', 'DreamSharingController@mydream');
Route::get('/mydream_add', 'DreamSharingController@mydream_create');
Route::post('/mydream_add', 'DreamSharingController@mydream_add');

Route::get('/analyze', 'DreamSharingController@analyze');
