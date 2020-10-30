<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
    return 'this is apparently unfinished route';
        //     
    // if(\Gate::denies('admin')) {
    //         return view('home.index-admin');
    //     }

    //    echo('u are not admin');
    }
}
