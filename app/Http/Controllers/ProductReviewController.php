<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductReviewController extends Controller
{
    //
    public function create($id)
    {
        return view('CraftsNepal.productReview.create', compact('id'));
    }

    /**
     * Store a newly created review in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // dd($request);
        $review = new ProductReview;
        $request->validate([
            'product_id' => 'required|exists:product,id', // Ensure product_id is valid
            'comment' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Create a new review
        $review->product_id = $request->product_id; // Assign product_id
        $review->user_id = Auth::id(); // Get authenticated user's ID
        $review->comment = $request->comment;
        $review->rating = $request->rating;
        $review->save();

        return redirect()->back()->with('success', 'Review submitted successfully.');
    }

    public function likeReview($id)
    {
        $review = ProductReview::findOrFail($id);
        $review->increment('likes');
        return redirect()->back()->with('success', 'You liked this review.');
    }
}
