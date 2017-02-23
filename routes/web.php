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

///////////////////////////////////////////////////////////////////////////////

Route::get('/home', 'HomeController@index');

Route::post('/add', 'TaskController@insert_post');

Route::get('/notes/{id}/delete', 'TaskController@delete_post');

Route::get('/notes/{id}/edit', 'TaskController@edit');
Route::post('/edit_post/{id}', 'TaskController@update');

Route::get('/{id}/profile', 'HomeController@profile_data');

///////////////////////////////////////////////////////////////////////////////

Route::post('/inprogress_task/{id}', 'HomeController@insert_inprogress');

Route::post('/done_task/{id}', 'HomeController@insert_done');