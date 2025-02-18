<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\SiteConfig;
use Xentixar\EsewaSdk\Esewa;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class EsewaPaymentController extends Controller
{
    public function pay(Request $request)
    {
        $transaction_uuid = $transaction_id = strtoupper(bin2hex(random_bytes(10)));
        $carts = Cart::query()->where('user_id', '=', Auth::id())->get();
        $sum = 0;
        foreach ($carts as $cart) {
            $sum += $cart->quantity * $cart->Product->price;
        }
        // dd($sum);
        if ($sum > 0) {

            $esewa = new Esewa();

            $esewa->config(
                route('esewa.check'),
                route('esewa.check'),
                $sum,
                $transaction_uuid

            );
            $esewa->init();
        }
    }

    public function check(Request $request)
    {
        $esewa = new Esewa();
        $data =  $esewa->decode();

        if ($data) {
            if ($data["status"] === 'COMPLETE') {
                $carts = Cart::query()->where('user_id', '=', Auth::id())->get();
                //  dd($carts);
                $msg = 'Payment succesful';
                foreach ($carts as $cart) {
                    $order = Order::query()->create([
                        'user_id' => Auth::id(),
                        'product_id' => $cart->product_id,
                        // 'order_details' => $request->order_detail,
                        'order_quantity' => $cart->quantity,
                        'order_date' => now(),

                        'total_price' => $data['total_amount'],
                        'order_status' => 'ordered'
                    ]);
                    foreach ($carts as $item) {

                        OrderItem::create([
                            'order_id' => $order->id,
                            'product_id' => $item->product_id,
                            'order_quantity' => $item->quantity,
                            'price' => $item->price,
                        ]);
                    }
                    //    dd($data['transaction_code']);
                    $amount= str_replace(',', '',$data['total_amount'] );
                    Payment::query()->create([
                        'user_id' => Auth::id(),
                        'transaction_code' => $data['transaction_code'],
                        'amount' => $amount,
                        'quantity' => $cart->quantity,
                        'product_id' => $cart->product_id,
                    ]);
                    // dd($data['transaction_code']);
                    $cart->delete();
                }

                $id = Auth()->id();

                $transaction_code = $data['transaction_code'];
                $datas = Payment::query()->where('transaction_code', '=', $transaction_code)->paginate(15);
                $totalAmount = Payment::query()
                    ->where('transaction_code', '=', $transaction_code)
                    ->first() // Retrieve the first matching record
                    ->amount;
                return view('CraftsNepal.payment.payment-success', compact('datas', 'totalAmount'));
            }
        }
        return redirect()->route('payment-failed')->with('error', 'Ordered failed');
    }
    public function paymentFailed(Request $request)
    {
        $errorMessage = $request->session()->get('error_message', 'Payment failed due to an unknown error.');

        return view('CraftsNepal.payment.payment-failed', compact('errorMessage'));
    }
}
