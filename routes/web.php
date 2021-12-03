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

Route::get('/', 'App\Http\Controllers\HomeController@index')
    ->name('home');

Route::get('/contact', 'App\Http\Controllers\ContactController@index')
    ->name('contact');

Route::get('/category/{category:category}', 'App\Http\Controllers\CategoryController@show')
    ->name('category');

Route::get('/book/{id}', 'App\Http\Controllers\BookController@show')
    ->name('book');

Route::get('/search', 'App\Http\Controllers\SearchController@index')
    ->name('search');
