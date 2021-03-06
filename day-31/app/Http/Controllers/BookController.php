<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Rating;
use App\Models\Category;
use App\Models\Subcategory;
use Symfony\Contracts\Service\Attribute\Required;

class BookController extends Controller
{
    public function index ()
    {
        
        $books = Book::with('ratings')->get();
        
        return view('/books/index', compact('books'));
       
    }

    public function show ($book_id)
    {
        $book = Book::with('ratings')->findOrFail($book_id);
        
        return view('books.show', compact('book'));

    }
    public function create ()
    {
        return view('books/create');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'authors' => 'required',
            'image' => 'required'
        ]);
        
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

    public function edit($book_id)
    {
        $book = Book::findOrFail($book_id);

        return view('books.edit', compact('book'));
    }

    public function update (Request $request, $book_id)
    {
        $this->validate($request, [
            'title' => 'required',
            'authors' => 'required',
            'image' => 'required'
        ]);

        $book = Book::find($book_id);
        $book->title = $request->input('title');
        $book->authors = $request->input('authors');
        $book->image = $request->input('image');
        $book->save();
        
        return redirect(action('BookController@show', ['id' => $book_id]))->with('flash_message', 'Book updated');
    
    }

    public function destroy ($book_id)
    {
        $book = Book::findOrFail($book_id);
        $book->delete();

        return redirect(action('BookController@index'))->with('flash_message', 'Book deleted');
    }

    public function storeReview (Request $request, $book_id)
    {
        $this->validate($request, [
            'review' => 'required|string|max:255',
            'rating' => 'required|numeric|gte:0|lte:100',
            'review_author' => 'required'
        ]);

        $rating = new Rating;
        $rating->review = $request->input('review');
        $rating->value = $request->input('rating');
        $rating->review_author = $request->input('review_author');
        $rating->book_id = $book_id;
        $rating->save();

        return redirect('book/' . $book_id)->with('flash_message', 'Review added');

    }

    
}
