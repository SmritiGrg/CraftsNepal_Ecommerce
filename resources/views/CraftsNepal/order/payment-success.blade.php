@extends('layouts.app')

@section('content')
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
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->transaction_code }}</td>
                        <td>NPR {{ number_format($data->total_amount, 2) }}</td>
                        <td>{{ $data->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button onclick="printReceipt()" class="btn btn-success">Print Receipt</button>

        <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
    </div>
    <script>
        function printReceipt() {
            var printContents = document.getElementById('print-section').innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload(); // Reload to restore the page after printing
        }
    </script>
@endsection
