<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','LandingPageController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/shop', 'ShopController@index');
Route::get('/shop/detail/{product}', 'ShopController@show');

Route::get('/cart', 'CartController@index');
Route::post('/cart/store', 'CartController@create');
Route::patch('/cart/{id}', 'CartController@update');

Route::get('/shop/category/{id}', 'ShopController@Category');
Route::post('/checkout','CheckOutController@store');
