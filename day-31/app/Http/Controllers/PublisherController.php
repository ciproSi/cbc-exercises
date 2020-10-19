<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        $query = "
            SELECT *
            FROM `publishers`
            WHERE 1
        ";

        $publishers = \DB::select($query);

        // return $publishers;
        return view('/publishers/publishers', compact('publishers'));
    }

    public function show ($publisher_id)
    {
        $query_books = "
            SELECT *
            FROM `books`
            WHERE `publisher_id` = ?
        ";

        $publishers_books = \DB::select($query_books, [$publisher_id]);
       
        $query_publisher = "
            SELECT *
            FROM `publishers`
            WHERE `id` = ?
        ";

        $publisher = \DB::select($query_publisher, [$publisher_id]);

        // return $publisher;
        // return  $publishers_books;
        return view('/publishers/publisher-detail', compact('publishers_books', 'publisher'));
    }
}
