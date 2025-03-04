<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $topProducts = Product::whereHas('reviews', function ($query) {
            $query->select(DB::raw('product_id'))
                ->groupBy('product_id')
                ->havingRaw('AVG(rating) >= 4');
        })
            ->withAvg('reviews', 'rating') // Get the average rating for each product
            ->orderByDesc('reviews_avg_rating') // Sort by average rating (highest first)
            ->take(6)
            ->get();
        $categories = ProductCategory::all();
        return view('CraftsNepal.index', compact('topProducts', 'categories'));
    }
}
