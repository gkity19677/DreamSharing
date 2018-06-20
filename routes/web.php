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
Route::get('/mydream_share', 'DreamSharingController@mydream_share');
Route::get('/mydream', 'DreamSharingController@mydream');
Route::get('/mydream_add', 'DreamSharingController@mydream_create');
Route::post('/mydream_add', 'DreamSharingController@mydream_add');

Route::get('/mydream_result/{id}', 'DreamSharingController@mydream_result');
// Route::delete('/mydream','DreamSharingController@mydream_delete')

Route::get('/mydream_edit/{id}', 'DreamSharingController@mydream_edit');
Route::post('/mydream_edit', 'DreamSharingController@mydream_update');
Route::get('/mydream_delete/{id}', 'DreamSharingController@mydream_delete');
Route::get('/analyze', 'DreamSharingController@analyze');
