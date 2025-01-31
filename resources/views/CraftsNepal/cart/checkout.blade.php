@extends('layouts.main')

@section('container')
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container my-4">
    <h2 class="text-center mb-4">Checkout</h2>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Order Summary</h4>
            <ul class="list-group mb-4">
                @foreach($cartItems as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item->product->name }} (x{{ $item->quantity }})
                        <span>Rs {{ $item->product->price * $item->quantity }}</span>
                    </li>
                @endforeach
            </ul>
            <h5 class="text-end">Total: RS{{ $total }}</h5>
        </div>
    </div>

    <form action="{{ route('order.place') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="order_detail" class="form-label">Delivery Order Details</label>
            <textarea name="order_detail" id="order_detail" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="payment_method" class="form-label">Payment Method</label>
            <select id="payment_method" name="payment_method" class="form-select" required>
                <option value="cash">Cash</option>
                <option value="khalti">Khalti</option>
            </select>
        </div>
        <div id="khalti_payment" class="d-none mb-3">
            <button type="button" id="khalti_button" class="btn btn-primary w-100">Pay with Khalti</button>
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-success w-100">Place Order</button>
    </div>
    </form>
    <script src="https://cdn.khalti.com/khalti-checkout.js"></script>

<script>
    document.getElementById('payment_method').addEventListener('change', function (){
        const khaltiPayment = document.getElementById('khalti_payment');
        if (this.value === 'khalti') {
            khaltiPayment.classList.remove('d-none');
        } else {
            khaltiPayment.classList.add('d-none');
        }
    });

    document.getElementById('khalti_button').addEventListener('click', function () {
        var paymentConfig = {
            total_amount: {{ $total * 100 }}, // in paisa
            rating: 0, // optional
            mobile: true, // optional (use this if you need the number input screen)
            product_identity: "product_identity_value", // optional
            product_name: "Product Order", // optional
            product_url: window.location.href, // optional
            success_url: "{{ route('userorder.index') }}",
            error_url: "{{ route('order.error') }}",
            callback: function(response) {
                // Handle success or failure response from Khalti
                if (response) {
                    // Optionally store the payment transaction id or info in the database
                    console.log(response);
                    window.location.href = response.success_url;
                }
            }
        };
        var checkout = new KhaltiCheckout(paymentConfig);
        checkout.show();
    });
</script>

    
@endsection
