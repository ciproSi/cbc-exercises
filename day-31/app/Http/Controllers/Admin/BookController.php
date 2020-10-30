<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('title')->get();
        
        return view('admin.books.index',compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::with('ratings')->findOrFail($id);

        return view('admin.books.show', compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        
        //we have the relation defined so we can save the genres of the book to new variable
        //we get collection
        // $book_genres = $book->genres;
        
        //$book_genres_id is still laravel collection so we can use methods of collections like pluck or contains
        $book_genres_id = $book->genres->pluck('id');

        $genres = Genre::orderBy('name')->get();

        return view('admin.books.edit', compact('book', 'genres', 'book_genres_id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $book_id)
    {
        $this->validate($request, [
            'title' => 'required',
            'authors' => 'required',
            'image' => 'required',
            'genre' => 'required'
        ], [
            'title.required' => 'Every book deserves a title.',
            'genre.required' => 'At least one genre needs to be defined.' 
        ]);

         //cover upload
       
        

        $book = Book::findOrFail($book_id);
        $book->title = $request->input('title');
        $book->authors = $request->input('authors');
        // $book->image = $request->input('image');
        
        if ($file = $request->file('cover')) {
            $db_file_name = $file->store('covers', 'uploads');
            $prefix = '/uploads';
            $book->image = $prefix . '/' . $db_file_name;
        }

        $book->save();
        
        //get the array of genre's id 
        $ids_of_genres = array_keys($request->input('genre'));
        $book->genres()->sync($ids_of_genres);

        return redirect(route('admin.books.index'))->with('flash_message', 'Book updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
