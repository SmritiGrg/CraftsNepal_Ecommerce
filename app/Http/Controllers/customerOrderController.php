<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class customerOrderController extends Controller
{
    public function index()
    {
         $id=auth()->id();
         $orders = Order::with('items') 
         ->where('user_id', $id) 
         ->get();

        return view('CraftsNepal.order.index', compact('orders'));
    }
    public function show($id){

    }
    public function error(){
        
    }
}
