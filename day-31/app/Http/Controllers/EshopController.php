<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EshopController extends Controller
{
    public function index ()
    {
        // getting categories
        $query = "
            SELECT * 
            FROM `categories`
            WHERE 1
        ";
        $categories = \DB::select($query);
        
        // getting books
        $query = '
            SELECT *
            FROM `books`
            WHERE 1
        ';
        $books = \DB::select($query);

        return view('/eshop/index', compact('categories', 'books'));
    }

    public function categoryIndex($cat_id)
    {
        // // getting subcategories of that category
        // $query = "
        //     SELECT *
        //     FROM `subcategories`
        //     WHERE `category_id` = ?
        // ";
        // $subcategories = \DB::select($query, [$cat_id]);

        // with query builder
        $subcategories = \DB::table('subcategories')->where('category_id', $cat_id)->get();

        // // getting books of that category
        // $query = "
        //     SELECT *
        //     FROM `books`
        //     WHERE `category_id` = ?
        // ";
        // $books = \DB::select($query, [$cat_id]);

        // with query builder
        $books = \DB::table('books')->where('category_id', $cat_id)->get();

        // //getting the name of the category (Q-how to work with date we already fetch in previous step)
        // $query = "
        //     SELECT *
        //     FROM `categories`
        //     WHERE `id` = ?
        // ";
        // $category_name = \DB::select($query, [$cat_id]);
        
        // let's do it with fluent query builder
        // $category_name = \DB::table('categories')->where('id', $cat_id)->get();
        // we dont want array, it's just a one record
        $category = \DB::table('categories')->where('id', $cat_id)->first();

        return view('/eshop/category', compact('category', 'subcategories', 'books'));

    }
    
    public function subcategoryIndex($subcat_id)
    {
        //getting name of that subcat (value is returning just value of given column)
        $subcat_name = \DB::table('subcategories')->where('id', $subcat_id)->value('name');

        //getting books of that subcat
        $books = \DB::table('books')->where('subcategory_id', $subcat_id)->get();

        // getting the category name
        $category_id = \DB::table('subcategories')->where('id', $subcat_id)->value('category_id');
        $category = \DB::table('categories')->where('id', $category_id)->first();
        
        return view('/eshop/subcategory', compact('books', 'subcat_name', 'category'));

    }
}
