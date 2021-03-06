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

//home
Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

Route::get('/api/books', 'APIBookController@index');
Route::get('/publishers', 'PublisherController@index');
Route::get('/publishers/{id}', 'PublisherController@show');

Route::get('/eshop', 'EshopController@index');
Route::get('/eshop/category/{id}', 'EshopController@categoryIndex');
Route::get('/eshop/subcategory/{id}', 'EshopController@subcategoryIndex');

//categories
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/show/{id}', 'CategoryController@show');
Route::get('/categories/edit/{id}', 'CategoryController@edit');
Route::put('/category/{id}', 'CategoryController@update');
Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::delete('/categories/{id}', 'CategoryController@destroy');

// subcategories
Route::resource('subcategories', SubcategoryController::class);

//orders
Route::post('/orders', 'OrderController@store');

Route::get('/book/create', 'BookController@create');
Route::post('/book', 'BookController@store');
Route::get('/book/{id}', 'BookController@show');
Route::get('/book', 'BookController@index');
Route::get('/book/edit/{id}', 'BookController@edit');
Route::put('book/{id}', 'BookController@update');
Route::post('/book/{id}/review', 'BookController@storeReview');
Route::delete('/book/{id}', 'BookController@destroy');

Route::get('/bookshop/create', 'BookshopController@create');
Route::post('bookshop', 'BookshopController@store');
Route::get('/bookshop', 'BookshopController@index');