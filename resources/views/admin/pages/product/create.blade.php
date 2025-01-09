@extends('admin.inc.main') 

@section('container')
<div class="container my-5">
    <h2 class="mb-4 text-center text-primary fw-bold">Add New Product</h2>
    <a href="{{ route('product.index') }}" class="btn btn-primary my-3">Back</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
   
            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf

                <div class="card shadow-lg border-0">
                    <div class="card-body p-4">

                        <!-- Product Name -->
                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter product name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Product Description -->
                        <div class="mb-4">
                            <label for="description" class="form-label fw-semibold">Product Description</label>
                            <textarea name="description" id="description" rows="4" class="form-control @error('description') is-invalid @enderror" placeholder="Provide a brief description" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Product Price -->
                        <div class="mb-4">
                            <label for="price" class="form-label fw-semibold">Price (Rs)</label>
                            <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter product price" value="{{ old('price') }}" min="1" required>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- product stock --}}
                        <div class="mb-4">
                            <label for="stock" class="form-label fw-semibold">Stock</label>
                            <input type="number" name="stock" id="stock" class="form-control @error('stock') is-invalid @enderror" placeholder="Enter product quantity" value="{{ old('stock') }}" min="1" required>
                            @error('stock')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                         {{-- product category --}}
                        <div class="mb-4"> 
                            <label for="category_id" class="form-label fw-semibold">Product Category</label>
                            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                                <option value="" disabled selected>Select a category</option>
                                @foreach($category as $value)
                                    <option value="{{ $value->id }}" {{ old('category_id') == $value->id ? 'selected' : '' }}>{{ $value->title }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Product Image -->
                        <div class="mb-3">
                            <div class="img-scrapper">
                                <div class="form-group col-12 mb-0">
                                    <label class="col-form-label">Image</label>
                                </div>
    
    
                                <!-- image box where image from model come -->
                                <div class="input-group mb-3 col-12">
                                    <input id="imagebox" type="text" class="form-control" disabled name="image">
                                    <!-- img come above ☝ -->
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                            data-bs-target="#modalId">
                                            Choose Image
                                        </button>
                                    </div>
                                </div>
                                <!-- we use modal to choose image -->
                                <div class="mb-3">
                                    <!-- Modal trigger button -->
    
                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static"
                                        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <!-- styled to see which image is selected  as type radio opacity is 0-->
                                                        <style>
                                                            [type=radio]:checked+img {
                                                                outline: 2px solid #f00;
                                                            }
                                                        </style>
    
    
                                                        <!-- for choosing 1 image from multiple option we use type radio -->
                                                        @foreach ($files as $file)
                                                            <label class="col-4">
                                                                <input type="radio" name="image" value="{{ $file->image }}"
                                                                    style="opacity: 0;">
                                                                <img src="{{ asset('uploads/' . $file->image) }}" alt="Image"
                                                                    height="100px" width="100px" style="margin-right: 20px;">
                                                            </label>
                                                        @endforeach
                                                        {{-- uploads/ specifies that the image is stored in the public/uploads folder.
                                                        $file->img is a variable holding the image filename (e.g., example.jpg) retrieved from your database. --}}
    
    
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                                                        onclick=" firstFunction()">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
    
                                    <!-- Optional: Place to the bottom of scripts -->
                                    <script>
                                        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    
                                        function firstFunction() {
                                            var x = document.querySelector('input[name=image]:checked').value;
                                            document.getElementById('imagebox').value = x; // use .innerHTML if we want data on label
                                        }
                                    </script>
                                </div>
    
                            </div>
                        </div>
                        
                      

                        <!-- Submit Button -->
                        <div class="text-center d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary px-5 py-2 fw-semibold">Add Product</button>
                            <button type="reset" class="btn btn-primary px-5 py-2 fw-semibold">Reset</button>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
