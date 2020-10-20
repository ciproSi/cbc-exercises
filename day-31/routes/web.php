<?php

use App\Http\Controllers\APIBookController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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
Route::get('/books/test', 'BookController@index');
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

Route::get('/books/create', 'BookController@create');
Route::post('/books', 'BookController@store');
