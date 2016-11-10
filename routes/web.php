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
Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');
Route::resource('admin/food_categories','FoodCategoryController');

Route::resource('admin/restaurants', 'Restaurants_master_Controller');
Route::resource('admin/hotels', 'HotelController');
Route::resource('admin/foods_menus', 'FoodMenuController');
Route::resource('admin/order', 'OrderController');
Route::post('/order', 'OrderController@update');
Route::get('/admin','AdminController@index');
Route::get('search/index','SearchController@index');
//Route::get('/search/index', 'SearchController@index');
Route::get('foodsearch/index','FoodSearchController@index');
Route::get('/foodsearch', 'FoodSearchController@index');
Route::get('/addproduct/{id}', 'ShoppingCartController@index');
Route::get('/checkout', 'CheckoutController@index');
Route::get('/cart', 'ShoppingCartController@show');
Route::post('/pay', 'ShoppingCartController@pay');
Route::get('/signup','CheckoutController@register');
Route::get('/guest', 'guestController@deatils');
Route::get('/increment/{id}', 'ShoppingCartController@increment');
Route::get('/decrement/{id}', 'ShoppingCartController@decrement');

Route::get('/guestpay', 'guestController@index');
Route::post('/guestpay', 'guestController@payment');




 