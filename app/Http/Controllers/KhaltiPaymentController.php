<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KhaltiPaymentController extends Controller
{
    public function verifyPayment(Request $request)
    {
        $token = $request->input('token');
        $amount = $request->input('amount');
        $productIdentity = $request->input('product_identity');
        $productName = $request->input('product_name');
        $productPrice = $request->input('product_price');
    
        $url = "https://khalti.com/api/v2/payment/verify/";
    
        $response = Http::withHeaders([
            'Authorization' => 'Key ' . env('KHALTI_SECRET_KEY'),
        ])->post($url, [
            'token' => $token,
            'amount' => $amount,
        ]);
    
        if ($response->successful()) {
            $data = $response->json();
    
            // Save the transaction details, including product info
            Payment::create([
                'token' => $token,
                'amount' => $amount / 100, // Convert to Rs.
                'product_identity' => $productIdentity,
                'product_name' => $productName,
                'product_price' => $productPrice,
                'status' => 'verified',
            ]);
    
            return response()->json([
                'status' => 'success',
                'message' => 'Payment verified successfully.',
                'data' => $data,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Payment verification failed.',
                'data' => $response->json(),
            ], 400);
        }
    }
    
}
