<?php

use Illuminate\Support\Facades\Route;

/*
*  Admin section routes
*
*/

//administration part dashboard
Route::get('/', 'AdminController@index')->name('admin.index')->middleware('auth');

//thanks to configuration in RouteServiceProvider we don't need to provide with prefixes here
// e.g.: /admin/books /admin/BookController...

Route::middleware('can:admin')->group( function () {
    Route::get('/books', 'BookController@index')->name('admin.books.index');
    Route::get('/books/create', 'BookController@create')->name('admin.books.create');
    Route::get('books/{book_id}/edit', 'BookController@edit')->name('admin.books.edit');
    Route::put('/books/{book_id}', 'BookController@update')->name('admin.books.update');
    Route::get('/books/{id}', 'BookController@show')->name('admin.books.show');
});



