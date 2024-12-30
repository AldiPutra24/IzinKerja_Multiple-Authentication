<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;

class DashboardController extends Controller
{
    public function index()
    {
        $payments = Payment::with('user')->get();
        return view('admin.dashboard', compact('payments'));
    }
}
