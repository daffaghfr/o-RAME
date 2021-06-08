<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('product', 'API\APIController@index')->name('product');
Route::get('product/makanan', 'API\APIController@getProductMakanan')->name('product-makanan');
Route::get('product/kue', 'API\APIController@getProductKue')->name('product-kue');
Route::get('product/peralatan', 'API\APIController@getProductPeralatan')->name('product-peralatan');
Route::get('cart', 'API\APIController@getCart')->name('get-cart')->middleware('jwt.verify');
Route::post('cart', 'API\APIController@postToCart')->name('add-to-cart')->middleware('jwt.verify');