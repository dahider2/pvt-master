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
    return view('admin.dashboard');
});

// get category registration form
Route::get('admin/category/create', "producecategoryController@create")->name('category');

//show categories registered
Route::get('admin/category', "producecategoryController@index");
//edit categories registered
Route::get('admin/category/edit/{$id}', "producecategoryController@edit");
//delete categories registered
Route::get('admin/category/delete/{$id}', "producecategoryController@delete");
//update categories registered
Route::put('admin/category/update', "producecategoryController@update");


//save the form data to DB
Route::post('admin/category/create',"producecategoryController@store");