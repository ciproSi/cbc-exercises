<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookshop;

class BookshopController extends Controller
{
    public function index ()
    {
        $bookshops = Bookshop::all();
        return view('bookshop/index', compact('bookshops'));
    }
    
    public function create ()
    {
        return view('bookshop/create');
    }

    public function store (Request $request)
    {
        //validation needs to be done!!!

        $bookshop_name = $request->input('name', 'default value');
        $bookshop_city = $request->input('city', 'default value');
        
        $new_bookshop = new Bookshop;
        $new_bookshop->name = $bookshop_name;
        $new_bookshop->city = $bookshop_city;
        $new_bookshop->save();
        $msg = 'Bookshop saved!'
        return redirect(action('BookshopController@index'))->with('msg');
        

    }
}

//how i do redirecting back to form if something is empty or is better to fix it with directly in the form
//how to use the flash msgs

