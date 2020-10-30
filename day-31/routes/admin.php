<?php

use Illuminate\Support\Facades\Route;

/*
*  Admin section routes
*
*/

//thanks to confign in RouteServiceProvider we don't need to provide with prefixes here
// e.g.: /admin/books /admin/BookController...
Route::get('/books', 'BookController@index')->name('admin.books.index');
Route::get('/books/create', 'BookController@create')->name('admin.books.create');
Route::get('books/{book_id}/edit', 'BookController@edit')->name('admin.books.edit');
Route::put('/books/{book_id}', 'BookController@update')->name('admin.books.update');

