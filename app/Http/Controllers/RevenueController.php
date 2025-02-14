<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    public function index()
    {
        $revenue =Payment::latest()->paginate(10);
        $totalIncome = $revenue->sum('amount');
        return view('admin.pages.Revenue.index', compact('revenue', 'totalIncome'));
    }
    public function show($id)
    {
        $revenue = Payment::findOrFail($id);
        return view('admin.pages.Revenue.show', compact('revenue'));
    }
}
