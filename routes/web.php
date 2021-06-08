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

Route::get('/', 'HomeController@index')->name('index');
Route::resource('product', 'ProductController');
Route::get('profile', 'ProfileController@index')->name('profile.index');
Route::post('profile/{redirect}', 'ProfileController@update')->name('profile.redirect');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('pages.home');
})->name('home.auth');
