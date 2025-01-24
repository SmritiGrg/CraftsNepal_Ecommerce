<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class adminOrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::query()
            ->when($request->search, function ($query, $search) {
                return $query->where('id', 'like', "%$search%")
                             ->orWhereHas('user', function ($q) use ($search) {
                                 $q->where('name', 'like', "%$search%");
                             });
            })
            ->when($request->status, function ($query, $status) {
                return $query->where('order_status', $status);
            })
            ->when($request->date, function ($query, $date) {
                return $query->whereDate('order_date', $date);
            })
            ->with(['user', 'items.product']) 
            ->paginate(10); // Paginate results
            // dd($orders );

        return view('admin.pages.order.index', compact('orders'));
      }
      public function show($id)
      {
          $order = Order::with(['items.product', 'user'])->findOrFail($id);
  
          return view('admin.pages.order.show', compact('order'));
      }
      
      public function update(Request $request, $id)
      {
          $order = Order::findOrFail($id);
          
          //dd($request->all());
          // dd($order);
          $request->validate([
              'order_status' => 'required|in:Pending,Completed,Cancelled',
          ]);
           $order->order_status= $request->order_status;
           $order->save();
        //   $order->update([
        //       'order_status' => $request->order_status,
        //   ]);
          return redirect()->route('order.index')->with('success', 'Order status updated successfully.');
      }
}
