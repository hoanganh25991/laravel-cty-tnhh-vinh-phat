<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
View::composer(['partial.navbar', 'index'], function($view){
	$products = \App\Product::all();
	$view->with(compact('products'));
});
Route::get('', function () {
    return view('index');
});
Route::get('intro','PageController@intro');
Route::get('contact','PageController@contact');
Route::get('partners','PageController@partners');
Route::get('products/{product}','ProductController@show');
Route::group(['prefix'=>'admin'], function(){
	Route::get('/', function() {
		return view('admin.index');
	});
	Route::get('products/create', 'ProductController@create');
	Route::post('products/store', 'ProductController@store');
	Route::get('products/index', 'ProductController@index');
});
