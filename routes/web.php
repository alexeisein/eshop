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

// Route::get('/', function () {
//     return view('shop.index');
// });

Route::get('/store/product', ['as' => 'store.index', 'uses' => 'StoreController@getIndex']);
Route::get('/store/product/{product}', ['as' => 'store.show-product', 'uses' => 'StoreController@showProduct']);
Route::resource('/cart', 'CartController');


Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'guest'], function(){
		/*SIGN UP*/
		Route::get('/signup', [
			'as' => 'admin.signup', 
			'uses' => 'AdminsController@getSignup'
		]);

		Route::post('/signup', 
			['as' => 'admin.signup', 
			'uses' => 'AdminsController@postSignup'
		]);

		/*SIGN IN*/
		Route::get('/signin', [
			'as' => 'admin.signin', 
			'uses' => 'AdminsController@getSignin'
		]);

		Route::post('/signin', [
			'as' => 'admin.signin', 
			'uses' => 'AdminsController@postSignin'
		]);
	});

	Route::group(['middleware' => 'auth'], function(){

		Route::get('/dashboard', [
			'as' => 'admin.dashboard', 
			'uses' => 'AdminsController@getProfile'
		]);

		Route::get('/logout', [
			'as' => 'admin.logout', 
			'uses' => 'AdminsController@getLogout'
		]);

		Route::resource('product', 'ProductsController', ['except' => 'show']);
		Route::resource('category', 'CategoriesController', ['except' => 'show']);
	});
	
});




	

