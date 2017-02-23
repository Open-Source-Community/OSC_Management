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

//Route::post('/notes/{id}/inprogress', 'HomeController@insert_inprogress');
//Route::post('/notes/{id}/done', 'HomeController@insert_done');

Route::get('/inprogress/{id}/{id_user}','HomeController@insert_inprogress');
Route::get('/done/{id}/{id_user}','HomeController@insert_done');

//Route::get('/done/{id}/{id_user}',function ($id , $id_user){
//    echo $id;
//    echo $id_user;
//});