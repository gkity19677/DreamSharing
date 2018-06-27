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

Route::get('/share', 'DreamSharingController@share');
Route::get('/share_result/{id}', 'DreamSharingController@share_result');
Route::post('/share_result/{id}', 'DreamSharingController@message');
Route::get('/keep', 'DreamSharingController@keep');
Route::post('/keep', 'DreamSharingController@checklike');
// Route::get('/popage/{id}', 'DreamSharingController@popage');
// Route::post('/popage', 'DreamSharingController@popage_update');

Route::get('/mydream', 'DreamSharingController@mydream');
Route::get('/mydream_add', 'DreamSharingController@mydream_create');
Route::post('/mydream_add', 'DreamSharingController@mydream_add');

Route::get('/mydream_result/{id}', 'DreamSharingController@mydream_result');
// Route::get('/mydream_result/{id}', 'DreamSharingController@mydream_show');

// Route::delete('/mydream','DreamSharingController@mydream_delete')

Route::get('/mydream_edit/{id}', 'DreamSharingController@mydream_edit');
Route::post('/mydream_edit', 'DreamSharingController@mydream_update');
Route::get('/mydream_delete/{id}', 'DreamSharingController@mydream_delete');

Route::get('/analyze', 'AnalyzeController@analyze');
Route::get('/analyze/{kind}', 'AnalyzeController@analyzebykind');
Route::post('/person', 'AnalyzeController@analyze_person_post');

Route::get('/basic_result', 'DreamSharingController@basic');
Route::get('/basic_update', 'DreamSharingController@basic_update');
Route::post('/basic_update', 'DreamSharingController@basic_edit');
