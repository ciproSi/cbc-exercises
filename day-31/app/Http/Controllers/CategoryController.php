<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return Category:: get();
    
    }

    public function create ()
    {
        return view('/categories/create');
    }

    public function store (Request $request)
    {
        //Request object basically doing validation and many other cool things like escaping
        $category_name = $request->input('category-name');
        $category = Category::where('name', $category_name)->value('name');
        $new_category = new Category;
        $new_category->name = $category_name;
        $new_category->save();

    }
}
