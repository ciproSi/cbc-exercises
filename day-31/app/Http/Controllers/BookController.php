<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
