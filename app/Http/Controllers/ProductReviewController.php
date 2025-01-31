<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductReviewController extends Controller
{
    //
    public function create($productId)
    {
        return view('productReview.create', compact('productId'));
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
            'comment' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);
        $review->comment = $request->comment;
        $review->rating = $request->rating;
        $review->user_id = Auth::user()->id;
        $review->save();

        return redirect()->back()->with('success', 'Review submitted successfully.');
    }
}
