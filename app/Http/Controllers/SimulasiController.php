<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Simulasi;

class SimulasiController extends Controller
{
    public function index()
    {
        return view('pinjaman.show');
    }

    public function simulasi(Request $request)
    {
        $validatedData = $request->validate([
            'jumlah_pinjaman' => 'required|numeric',
            
            'bulan' => 'required|integer',
        ]);

        $jumlah_pinjaman = $request->input('jumlah_pinjaman');
        $bunga =  10; // Set default interest rate to 10% if not provided
        $bulan = $request->input('bulan');

        $interest = ($jumlah_pinjaman * $bunga * $bulan) / 100;
        $total_pinjaman = $jumlah_pinjaman + $interest;

        return view('pinjaman.simulasi', compact('jumlah_pinjaman', 'bunga', 'bulan', 'interest', 'total_pinjaman'));
    }
}
