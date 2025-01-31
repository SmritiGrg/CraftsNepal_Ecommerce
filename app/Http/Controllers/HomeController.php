<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = product::all(); // Assuming you have a Product model
        return view('CraftsNepal.index', compact('products'));
    }
}
