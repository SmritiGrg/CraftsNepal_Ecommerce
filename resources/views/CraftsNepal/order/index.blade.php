@extends('layouts.main')
@section('container')
<div class="container my-5">
    <div class="heading">
       
        <h1>Order History</h1>
   </div>
   @foreach($orders as $order)
   <div class="card mb-4 shadow-sm">
       <!-- Order Header -->
       <div class="card-header bg-white d-flex justify-content-between align-items-center">
           <div>
               <h5 class="mb-0">Order #{{ $loop->iteration }}</h5>
               <small class="text-muted">{{ $order->order_date }}</small>
           </div>

           <div class="text-end">
               <!-- Order Status -->
               <span class="badge 
                   {{ $order->order_status == 'Pending' ? 'bg-warning text-dark' : 
                      ($order->order_status == 'Completed' ? 'bg-success' : 
                      ($order->order_status == 'Cancelled' ? 'bg-danger' : 'bg-secondary')) }}">
                   {{ $order->order_status }}
               </span>

               <!-- Payment Status -->
               <span class="badge ms-2 
                   {{ $order->payment == 'paid' ? 'bg-success' : 'bg-danger' }}">
                   <i class="fas fa-wallet"></i> 
                   {{ ucfirst($order->payment) }}
               </span>
           </div>
       </div>

       <!-- Order Items -->
       <div class="card-body">
           @foreach($order->items as $item)
               <div class="d-flex py-3 border-bottom align-items-center">
                   <!-- Product Image -->
                   <img src="{{ asset('uploads/' . $item->product->image) }}" 
                        alt="{{ $item->product->name }}" 
                        class="rounded" style="width: 60px; height: 60px; margin-right: 15px;">
                   
                   <!-- Product Details -->
                   <div class="flex-grow-1">
                       <h6 class="mb-1">{{ $item->product->name }}</h6>
                       <p class="text-muted mb-1">{{ $item->product->description }}</p>
                       <strong>Rs {{ $item->price }}</strong>
                   </div>

                   <!-- Quantity -->
                   <div class="text-end">
                       <h6 class="mb-0">Qty: {{ $item->order_quantity }}</h6>
                   </div>
               </div>
           @endforeach
       </div>
   </div>
@endforeach

</div>
@endsection
