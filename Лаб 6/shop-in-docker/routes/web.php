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

Route::get('/', 'ProductsController@index');
Route::get('/products/index', 'ProductsController@index');
Route::delete('/products/{id}', 'ProductsController@delete');
Route::post('/products/new', 'ProductsController@save');
Route::get('/products/new', 'ProductsController@creatingView');
Route::get('/add-to-cart/{id}', 'ProductsController@addToCart');
Route::get('/products/cart', 'ProductsController@productCart');
