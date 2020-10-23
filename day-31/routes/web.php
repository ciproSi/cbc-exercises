<?php

use App\Http\Controllers\APIBookController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookshopController;
use App\Http\Controllers\CategoryController;
use Illuminate\Contracts\Cache\Store;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/books', 'APIBookController@index');
Route::get('/publishers', 'PublisherController@index');
Route::get('/publishers/{id}', 'PublisherController@show');

Route::get('/eshop', 'EshopController@index');
Route::get('/eshop/category/{id}', 'EshopController@categoryIndex');
Route::get('/eshop/subcategory/{id}', 'EshopController@subcategoryIndex');

Route::get('/categories', 'CategoryController@index');
// method create shows the form by convention
Route::get('/categories/create', 'CategoryController@create');
// method store safe it to the db
Route::post('/categories', 'CategoryController@store');

Route::get('/book/create', 'BookController@create');
Route::post('/book', 'BookController@store');
Route::get('/book/{id}', 'BookController@show');
Route::get('/book', 'BookController@index');
Route::get('/book/edit/{id}', 'BookController@edit');
Route::put('book/{id}', 'BookController@update');

Route::get('/bookshop/create', 'BookshopController@create');
Route::post('bookshop', 'BookshopController@store');
Route::get('/bookshop', 'BookshopController@index');