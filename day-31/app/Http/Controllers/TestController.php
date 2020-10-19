<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class TestController extends Controller
{
    public function index()
    {
        
        // how to pass a value to view (use method with)
        $user = 'simon';
        $name = 'Simon Cipro';
        
        // bad way how to put the html
        // return '<h1>Ahoj</h1>';

        // instead we use views
        //with says in the view you will have variable 'name' with value $name
        // return view('test/test')->with('user', $user);

        //if you have multiple variables you want to pass
        // return view('test/test')->with(
        //   [
        //     'name' => $name,
        //     'user' => $user
        //   ]  
        // );

        //or even shorter version for multiple variables
        // return view('test/test', [
        //     'name' => $name,
        //     'user' => $user
        // ]);

        // or even shorter if we use/want to use the same variable names in view as in the controller
        // we use function compact
        return view('test/test', compact('user', 'name'));

        //the compact is actualy doing in this case:
            // 'name' => $name,
        //     'user' => $user
    }
}