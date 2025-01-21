<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class cutomerOrderController extends Controller
{
    public function index()
    {
//dd('hello');
        $orders = Order::with('items')->get();

        return view('CraftsNepal.order.index', compact('orders'));
    }
}
