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

Route::get('/', function () {
    return view('welcome');
});

//kdyz nekdo prijden a domena/api, tak to spusti metodu index() tridy ApiController, ktera je na ceste App\Http\Controllers\
Route::get('/api', 'App\Http\Controllers\ApiController@index');

