<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $products = Product::latest()->take(3)->get();
    return view('CraftsNepal.index', compact('products'));
}
}
