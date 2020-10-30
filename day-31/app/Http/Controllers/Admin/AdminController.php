<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class AdminController extends Controller
{
    public function index ()
    {
        if (\Gate::allows('admin')) {
            
            //just to simulate admin dashboard
            //I will just show the number of books
            $books = Book::get();
            
            return view('admin.index',compact('books'));

            //TODO: show orders
            return 'admin dashboard';

        } else {
            return 'here must be redirect to normal user dashboard';
        }

    }
}
