<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $query = $request->input('query'); 
        $products = Product::where('name', 'LIKE', "%{$query}%")->get(); 
        return view('CraftsNepal.index', compact('products', 'query')); 
    }
}
