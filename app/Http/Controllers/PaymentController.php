<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment; // Pastikan Anda sudah mengimpor model Payment

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        // Validasi file yang diunggah
        $request->validate([
            'payment_proof' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan file bukti transfer
        $path = $request->file('payment_proof')->store('payment_proofs', 'public');

        // Simpan data bukti transfer ke database (relasi dengan user)
        Auth::user()->payments()->create([
            'proof_path' => $path,
            'status' => 'pending',
        ]);

        return redirect()->route('account.dashboard')->with('success', 'Bukti transfer berhasil diunggah.');
    }
}
