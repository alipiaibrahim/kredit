<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perhitungan;
use App\Models\Subkriteria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Session;

class PerhitungganController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $subkriteria = Subkriteria::all();
        $perhitungans = Perhitungan::with('subkriteria')->get();
        return view('perhitungan.show', compact('user', 'perhitungans', 'subkriteria'));
    }
    public function create()
    {
        // return view('pinjaman.tambah');
        $penghasilanSubkriteria = Subkriteria::where('nama', 'penghasilan')->get();
        $usiaSubkriteria = Subkriteria::where('nama', 'usia')->get();
        $statusPekerjaanSubkriteria = Subkriteria::where('nama', 'status_pekerjaan')->get();
        $keluargaSubkriteria = Subkriteria::where('nama', 'keluarga')->get();
        $statusRumahSubkriteria = Subkriteria::where('nama', 'status_rumah')->get();
        $penjaminSubkriteria = Subkriteria::where('nama', 'penjamin')->get();
        $cicilanSubkriteria = Subkriteria::where('nama', 'cicilan')->get();
        $bpkbKendaraanSubkriteria = Subkriteria::where('nama', 'bpkb_kendaraan')->get();
        $lamaBekerjaSubkriteria = Subkriteria::where('nama', 'lama_bekerja')->get();

        return view('perhitungan.tambah', compact(
            'penghasilanSubkriteria',
            'usiaSubkriteria',
            'statusPekerjaanSubkriteria',
            'keluargaSubkriteria',
            'statusRumahSubkriteria',
            'penjaminSubkriteria',
            'cicilanSubkriteria',
            'bpkbKendaraanSubkriteria',
            'lamaBekerjaSubkriteria'
        ));
    }
    public function store(Request $req)
    {
        $perhitungan = new Perhitungan;
        $validatedData = $req->validate([
            'nama' => 'required',
            'penghasilan' => 'required|numeric',
            'usia' => 'required|integer',
            'status_pekerjaan' => 'required',
            'keluarga' => 'required|integer',
            'status_rumah' => 'required',
            'penjamin' => 'required',
            'cicilan' => 'required|numeric',
            'bpkb_kendaraan' => 'required|boolean',
            'lama_bekerja' => 'required|integer',
        ]);
        $perhitungan->nama = $req->get('nama');
        $perhitungan->penghasilan = $req->get('no_ktp');
        $perhitungan->usia = $req->get('alamat');
        $perhitungan->status_pekerjaan = $req->get('desa');
        $perhitungan->keluarga = $req->get('kecamatan');
        $perhitungan->status_rumah = $req->get('kabupaten');
        $perhitungan->penjamin = $req->get('pekerjaan');
        $perhitungan->cicilan = $req->get('tlpn');
        $perhitungan->bpkb_kendaraan = $req->get('email');
        $perhitungan->lama_bekerja = $req->get('tujuan_pinjaman');

        $perhitungan->save();
        // $success = true;
        // $message = "Data Diri Berhasil Ditambah";
        // return response()->json([
        //     'success' => $success,
        //     'message' => $message,
        // ]);
        // Session::flash('status', 'Tambah data Nilai berhasil!!!');
        return redirect()->route('datadiri.show')->with('success', 'Data berhasil diperbarui.');
    }
}
