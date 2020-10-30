<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category:: get();

        return view('categories.index', compact('categories'));
    
    }

    public function show ($category_id)
    {
        $category = Category::findOrFail($category_id);

        return view('categories.show', compact('category'));
    }

    public function edit ($category_id)
    {
        $category = Category::findOrFail($category_id);

        return view('categories.edit', compact('category'));
    }

    public function update (Request $request, $category_id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|min:3|unique:categories,name,'. $category_id
        ]);

        $category = Category::findOrFail($category_id);
        
        // test if any change was actually made
        // if ($category->name == $request->input('name')) {
        //     return redirect(action('CategoryController@index'))->with(['success' => 'No change was performed.']);
        // }

        $category->update($request->all());
        
        return redirect(action('CategoryController@index'))->with(['success' => 'Category saved successfully']);
    }

    public function create ()
    {
        return view('/categories/create');
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|min:3|unique:categories,name'
        ]);
        
        // mass assignment - here has no meaning but if you have more input fields, it comes in handy
        $category = Category::create($request->all());
    
        return redirect(action('CategoryController@index'))->with(['success' => 'Category created']);
        
    }

    public function destroy ($category_id)
    {
        $category = Category::findOrFail($category_id);
        $category -> delete();
        return redirect(action('CategoryController@index'))->with(['success' => 'Category deleted', 'class' => 'alert alert-danger']);
    }

}
