@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="alert alert-success">
            <h2>Payment Successful!</h2>
            <p>Thank you for your order. Your transaction was successful.</p>
            <p><strong>Transaction Code:</strong> {{ $datas->first()->transaction_code ?? 'N/A' }}</p>
            <p><strong>Total Amount Paid:</strong> NPR {{ number_format($totalAmount, 2) }}</p>
        </div>

        <h3>Order Details</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Transaction Code</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->transaction_code }}</td>
                        <td>
                            <img src="{{ asset('uploads/' . $data->product->image) }}" alt="{{ $data->product_name }}" width="80" height="80">
                        </td>
                        <td>{{ $data->product->name ?? 'N/A' }}</td>
                        {{-- <td>{{ $data->product->description ?? 'No description available' }}</td> --}}
                        <td>{{ $data->quantity }}</td>
                        <td>NPR {{ number_format($data->amount, 2) }}</td>
                        <td>{{ $data->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center gap-3 mt-3">
            <!-- Print Button -->
            <button onclick="window.print()" class="btn btn-warning text-dark fw-bold shadow">
                <i class="fas fa-print"></i> Print
            </button>
        
            <!-- Back to Home Button -->
            <a href="{{ url('/') }}" class="btn btn-success fw-bold shadow">
                <i class="fas fa-home"></i> Back to Home
            </a>
        </div>
        
    </div>
    <script>
        function printReceipt() {
            var printContents = document.getElementById('print-section').innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload(); 
        }
    </script>
@endsection
