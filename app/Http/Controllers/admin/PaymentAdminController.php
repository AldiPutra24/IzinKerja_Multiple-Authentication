<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentAdminController extends Controller
{
    public function index()
    {
        $payments = Payment::with('user')->get(); // Ambil data semua pembayaran dengan relasi user
        return view('admin.payments.index', compact('payments')); // Pastikan file blade ada di resources/views/admin/payments/index.blade.php
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected',
        ]);

        $payment = Payment::findOrFail($id);
        $payment->status = $request->status;
        $payment->save();

        return redirect()->route('admin.payments')->with('success', 'Status pembayaran berhasil diperbarui.');
    }
}
