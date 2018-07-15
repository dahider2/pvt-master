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
})->name('welcome');



//Adminstration routes**********************

// Route::middleware(['admin'])->group(function () {
// 	Route::get('/admin', function () {
//     return view('admin.dashboard');
// });
// Route::resource('admin/category','CategoryController');
// });


// user stuff
Route::get('/postad', 'Front\produceController@showProduce')->name('postad');
Route::post('/postad', 'Front\produceController@addProduce');

Route::get('/wel', function(){
  return view('wel');
});

// categorie start

Route::get('/mobile', function(){
  return view('mobile');
});

Route::get('/automobile', function(){
  return view('automobile');
});

Route::get('/auto', function(){
  return view('auto');
});


Route::get('/electronic', function(){
  return view('electronic');
});

Route::get('/meuble', function(){
  return view('meuble');
});

Route::get('/animal', function(){
  return view('animal');
});

Route::get('/livre', function(){
  return view('livre');
});

Route::get('/fashon', function(){
  return view('fashon');
});

Route::get('/enfant', function(){
  return view('enfant');
});

Route::get('/service', function(){
  return view('service');
});

Route::get('/job', function(){
  return view('job');
});

Route::get('/logement', function(){
  return view('logement');
});

// categories
Route::get('/single/{id}', 'Front\SingleprodController@show');
Route::get('/single', 'Front\SingleprodController@index');

Route::get('/allcategories', 'Front\allcategoriesController@show')->name('allcategories');

Route::get('/postad/get-city-lists', 'Front\produceController@getCityAreasList');
Route::get('/postad/get-sub-cat-lists', 'Front\produceController@getSubCategory');
Route::get('/postad/get-email-user', 'Front\produceController@getEmailUser');
// Route::get('/postad/get-area-lists', 'Front\produceController@getAreaList');

// admin stuff
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

Auth::routes(['except'=>'login','register']);

Route::group([
    'middleware' =>'guest',
     'namespace' => 'Auth' ],function (){
Route::post('/login', 'LoginController@logUser')->name('login');
Route::get('/login', function (){return view('auth.login');});
Route::post('/register', 'RegisterController@registerUser')->name('register');
Route::get('/register', function (){return view('auth.register');});
});




//chat routes
Route::group([
	 'namespace' => 'Front',
	 'middleware' => ['auth'],
	 'prefix'     => 'profile'
	 	], function ()
	{

Route::get('/chat', 'UserProfilController@index');
Route::get('/ads', 'UserProfilController@ads');
Route::get('/setting', 'UserProfilController@setting');
Route::get('/chat-start', 'UserProfilController@showChat')->name('chatShow');
});
