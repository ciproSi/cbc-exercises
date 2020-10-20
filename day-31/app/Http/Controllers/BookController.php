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

       $page_nr = $_GET['page'] ?? 1;


        $query = '
            SELECT *
            FROM `books`
            WHERE 1
            LIMIT ' . ($page_nr - 1) * 4 . ', 4
        ';
        $books = \DB::select($query);
        
        return $books;
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
            return view('books/success');
        } else {
            return 'Book is already in our DB.';
        }

        

    }
}
