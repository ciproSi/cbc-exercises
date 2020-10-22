<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Subcategory;

class BookController extends Controller
{
    public function index ()
    {
        
        $books = Book::with('ratings')->get();
        
        return view('/books/index', compact('books'));
       
    }

    public function create ()
    {
        return view('books/create');
    }

    public function store (Request $request)
    {
        $book_title = $request->input('title');
        $authors = $request->input('authors');
        $image = $request->input('image');

        // check whether the book is already in db
        $existing_book = Book::where('title', $book_title)->value('title');
        if ($existing_book == null) {
            $book = new Book;
            $book->title = $book_title;
            $book->authors = $authors;
            $book->image = $image;
            $book->save();
            return redirect(action('BookController@index'))->with('flash_message', 'Saved Correctly!');
        } else {
            return redirect(action('BookController@index'))->with('flash_message', 'Book is already in the DB!');
        }

        

    }
}
