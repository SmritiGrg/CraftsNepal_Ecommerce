<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\product;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $totalUsers = User::count();
        $totalOrders = Order::count();
        $totalRevenue = Payment::sum('amount');
        $totalProducts = product::count();
        $totalCategory= ProductCategory::count();


        return view('admin.index', compact('totalUsers', 'totalOrders', 'totalRevenue', 'totalProducts','totalCategory'));
    }
}
