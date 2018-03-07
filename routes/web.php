<?php
use App\User;

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

Route::get('/postad', 'produceController@showProduce');
Route::post('/postad', 'produceController@addProduce');


Route::get('/categories', function () {
    return view('categories');
});

Route::get('/producecategory', 'producecategoryController@index');

Route::get('/allcategories', 'allcategoriesController@show');

Route::get('/single', function () {
    return view('single');
});

Route::get('signin','UsersController@signin');

Route::post('/signin', 'UsersController@authenticate');

Route::get('/signup','UsersController@signup');

Route::post('/signup', 'UsersController@doRegistration');

Route::post('/confirmation', function(){

  return view('confirmation');
});
