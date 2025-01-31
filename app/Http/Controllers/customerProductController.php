<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CustomerProductController extends Controller
{
    public function index(Request $request)
    {
        // Start with a basic query to fetch all products
        $query = Product::query();
        
        // Filtering by Category
        if ($request->has('category')) {
            // Check if the 'category' parameter exists in the request
            $categoryTitle = $request->query('category'); // Get the category title from the query string

            // Filter products based on the related category's title
            $query->whereHas('category', function ($q) use ($categoryTitle) {
                $q->where('title', $categoryTitle); // Match the 'title' column in the ProductCategory table
            });
        }

        // Sorting Logic
        if ($request->query('sort') == 'price_asc') {
            $query->orderBy('price', 'asc'); // Sort by price from low to high
        } elseif ($request->query('sort') == 'price_desc') {
            $query->orderBy('price', 'desc'); // Sort by price from high to low
        }

        // Get the filtered and sorted products
        $products = $query->get();
        
        // Return the products to the view
        return view('CraftsNepal.ProductList', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Fetch a single product by its ID
        $product = Product::findOrFail($id);
        // Return the product details view
        return view('CraftsNepal.product.details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
