<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store (Request $request)
    {
        $this->validate($request, [
            'quantity' => 'required|numeric|min:1'
        ]);

        $order = new Order;
        $order->with('books');
        $order->save();
        
        // $order->pivot->book_id = $request->input('book_id');
        // $order->pivot->quantity = $request->input('quantity');

    
    }
}
