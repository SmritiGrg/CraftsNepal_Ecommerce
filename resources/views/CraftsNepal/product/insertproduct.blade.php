@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Add Product</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Product Form -->
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" name="stock" id="stock" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Add Product</button>
    </form>
</div>
@endsection
