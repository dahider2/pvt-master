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



//Adminstration routes**********************

// Route::middleware(['admin'])->group(function () {
// 	Route::get('/admin', function () {
//     return view('admin.dashboard');
// });
// Route::resource('admin/category','CategoryController');
// });
Route::group(
    [
      'prefix' => 'admin', 
      'namespace' => 'Back', 
      'middleware' => ['auth','admin']
    ], function()
    {
    	Route::get('/', function () {
	    	return view('admin.dashboard');
		});


        Route::get('/category','CategoryController@index')->name('category');
        Route::get('/category/show','CategoryController@show')->name('showCategory');
        Route::get('/category/edit/{id}','CategoryController@edit')->name('editCategory');
        Route::post('/category','CategoryController@store')->name('category');
        Route::put('/category/update/{id}','CategoryController@update')->name('updateCategory');

        Route::get('/option','OptionController@index')->name('option');
        Route::get('/option/show','OptionController@show')->name('showOption');
        Route::get('/option/edit/{id}','OptionController@edit')->name('editOption');
        Route::post('/option','OptionController@store')->name('postOption');
        Route::put('/option/update/{id}','OptionController@update')->name('updateOption');
        Route::get('/option/destroy/{id}','OptionController@destroy')->name('destroyOption');

        Route::get('/classifier','ItemOptionController@index')->name('classifier');
        Route::get('/classifier/show','ItemOptionController@show')->name('showClassifier');
        Route::get('/classifier/edit/{id}','ItemOptionController@edit')->name('editClassifier');
        Route::post('/classifier','ItemOptionController@store')->name('Classifier');
        Route::put('/classifier/update/{id}','ItemOptionController@update')->name('updateClassifier');
        Route::get('/classifier/destroy/{id}','ItemOptionController@destroy')->name('destroyClassifier');

        // country
        Route::resource('country', 'CountryController', ['except' => 'show']);
        Route::resource('city', 'CityController', ['except' => 'show']);
        Route::resource('area', 'CityAreaController', ['except' => 'show']);

       	
    });
Auth::routes();

//chat routes
Route::group([
	 'namespace' => 'Back', 
	 'middleware' => ['auth'],
	 'prefix'     => 'profile'
	 	], function ()
	{

Route::get('/chat', 'UserProfilController@index');
Route::get('/ads', 'UserProfilController@ads');
Route::get('/setting', 'UserProfilController@setting');
});