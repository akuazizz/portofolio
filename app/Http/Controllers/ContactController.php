<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // <-- TAMBAHKAN INI

class ContactController extends Controller
{
    // === TAMBAHKAN FUNGSI INI ===
    public function store(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // 2. Simpan data ke dalam tabel 'contacts'
        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3. Kembalikan ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
