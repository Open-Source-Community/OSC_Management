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

Route::get('/tasks/{id}/delete', 'TaskController@delete_post');

///////////////////////////////////////////////////////////////////////////////

Route::get('/tasks_inprogress/{id}/delete', 'HomeController@delete_task_inprogress');
Route::get('/tasks_done/{id}/delete', 'HomeController@delete_task_done');

///////////////////////////////////////////////////////////////////////////////

Route::get('/tasks/{id}/edit', 'TaskController@edit');
Route::post('/edit_task/{id}', 'TaskController@update');

Route::get('/{id}/profile', 'HomeController@profile_data');

///////////////////////////////////////////////////////////////////////////////

Route::get('/inprogress/{id}/{member}/{taskk}','HomeController@insert_inprogress');
Route::get('/done/{id}/{member}/{taskk}','HomeController@insert_done');

///////////////////////////////////////////////////////////////////////////////