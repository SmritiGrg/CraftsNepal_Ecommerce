@extends('layouts.main')
@section('container')

<div class="container">
    <h1 class="text-xl font-bold mb-4">Write a Review</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('product.review.store') }}" method="POST" class="space-y-4">
        @csrf
        <input type="hidden" name="product_id" value="{{ $productId }}">

        <div class="form-group">
            <label for="rating" class="block font-semibold mb-2">Rating (1-5 Stars)</label>
            <select name="rating" id="rating" class="form-control border rounded p-2" required>
                <option value="">Choose a Rating</option>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
                @endfor
            </select>
            @error('rating')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="comment" class="block font-semibold mb-2">Comment</label>
            <textarea name="comment" id="comment" rows="4" class="form-control border rounded p-2 w-full" placeholder="Write your review..." required></textarea>
            @error('comment')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Submit Review
        </button>
    </form>
</div>

@endsection