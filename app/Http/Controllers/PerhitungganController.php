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

        $perhitungans = Perhitungan::all();
        return view('perhitungan.show', compact('user', 'perhitungans', 'subkriteria'));
    }
    public function create()
    {
        $user = Auth::user();
        $subkriteria = Subkriteria::all();

        $perhitungans = Perhitungan::all();
        $penghasilan = Subkriteria::where('kriteria_id', '=', '1')->get();
        $usia = Subkriteria::where('kriteria_id', '=', '2')->get();
        $statusPekerjaan = Subkriteria::where('kriteria_id', '=', '3')->get();
        $keluarga = Subkriteria::where('kriteria_id', '=', '4')->get();
        $statusRumah = Subkriteria::where('kriteria_id', '=', '5')->get();
        $penjamin = Subkriteria::where('kriteria_id', '=', '6')->get();
        $cicilan = Subkriteria::where('kriteria_id', '=', '7')->get();
        $bpkbKendaraan = Subkriteria::where('kriteria_id', '=', '8')->get();
        $lamaBekerja = Subkriteria::where('kriteria_id', '=', '9')->get();
        return view('perhitungan.tambah', compact('user', 'perhitungans', 'subkriteria', 'penghasilan', 'usia', 'statusPekerjaan', 'keluarga', 'statusRumah', 'penjamin', 'cicilan', 'bpkbKendaraan', 'lamaBekerja'));
        //     $penghasilanSubkriteria = Subkriteria::where('nama', 'penghasilan')->get();
        //     $usiaSubkriteria = Subkriteria::where('nama', 'usia')->get();
        //     $statusPekerjaanSubkriteria = Subkriteria::where('nama', 'status_pekerjaan')->get();
        //     $keluargaSubkriteria = Subkriteria::where('nama', 'keluarga')->get();
        //     $statusRumahSubkriteria = Subkriteria::where('nama', 'status_rumah')->get();
        //     $penjaminSubkriteria = Subkriteria::where('nama', 'penjamin')->get();
        //     $cicilanSubkriteria = Subkriteria::where('nama', 'cicilan')->get();
        //     $bpkbKendaraanSubkriteria = Subkriteria::where('nama', 'bpkb_kendaraan')->get();
        //     $lamaBekerjaSubkriteria = Subkriteria::where('nama', 'lama_bekerja')->get();

        //     return view('perhitungan.tambah', compact(
        //         'penghasilanSubkriteria',
        //         'usiaSubkriteria',
        //         'statusPekerjaanSubkriteria',
        //         'keluargaSubkriteria',
        //         'statusRumahSubkriteria',
        //         'penjaminSubkriteria',
        //         'cicilanSubkriteria',
        //         'bpkbKendaraanSubkriteria',
        //         'lamaBekerjaSubkriteria'
        //     ));
    }
    public function store(Request $request)
    {

        $penghasilan = $request->input('penghasilan');
        $usia = $request->input('usia');
        $statusPekerjaan = $request->input('status_pekerjaan');
        $keluarga = $request->input('keluarga');
        $statusRumah = $request->input('status_rumah');
        $penjamin = $request->input('penjamin');
        $cicilan = $request->input('cicilan');
        $bpkbKendaraan = $request->input('bpkb_kendaraan');
        $lamaBekerja = $request->input('lama_bekerja');

        $nilaiPenghasilan = $penghasilan * 0.20;
        $nilaiUsia = $usia * 0.15;
        $nilaiStatusPekerjaan = $statusPekerjaan * 0.15;
        $nilaiKeluarga = $keluarga * 0.12;
        $nilaiStatusRumah = $statusRumah * 0.10;
        $nilaiPenjamin = $penjamin * 0.10;
        $nilaiCicilan = $cicilan * 0.08;
        $nilaiBpkbKendaraan = $bpkbKendaraan * 0.05;
        $nilaiLamaBekerja = $lamaBekerja * 0.05;

        $nilaiAkhir = $nilaiPenghasilan + $nilaiUsia + $nilaiStatusPekerjaan + $nilaiKeluarga + $nilaiStatusRumah +
            $nilaiPenjamin + $nilaiCicilan + $nilaiBpkbKendaraan + $nilaiLamaBekerja;

        // Tentukan status berdasarkan nilai akhir
        if ($nilaiAkhir >= 0 && $nilaiAkhir <= 0.30) {
            $status = 'Ditolak';
        } elseif ($nilaiAkhir > 0.30 && $nilaiAkhir <= 0.70) {
            $status = 'Dipertimbangkan';
        } else {
            $status = 'Diterima';
        }

        // Simpan data ke dalam database
        $perhitungan = new Perhitungan;
        $perhitungan->nama = $request->get('nama');
        $perhitungan->penghasilan = $request->get('penghasilan');
        $perhitungan->usia = $request->get('usia');
        $perhitungan->status_pekerjaan = $request->get('status_pekerjaan');
        $perhitungan->keluarga = $request->get('keluarga');
        $perhitungan->status_rumah = $request->get('status_rumah');
        $perhitungan->penjamin = $request->get('penjamin');
        $perhitungan->cicilan = $request->get('cicilan');
        $perhitungan->bpkb_kendaraan = $request->get('bpkb_kendaraan');
        $perhitungan->lama_bekerja = $request->get('lama_bekerja');
        $perhitungan->hasil = $nilaiAkhir;
        $perhitungan->status = $status;



        $perhitungan->save();
        // $success = true;
        // $message = "Data Diri Berhasil Ditambah";
        // return response()->json([
        //     'success' => $success,
        //     'message' => $message,
        // ]);
        // Session::flash('status', 'Tambah data Nilai berhasil!!!');
        return redirect()->route('perhitungan.hasil')->with('success', 'Data berhasil diperbarui.');
    }
    public function hasil()
    {
        $user = Auth::user();
        $subkriteria = Subkriteria::all();

        $perhitungans = Perhitungan::all();
        return view('perhitungan.hasil', compact('user', 'perhitungans', 'subkriteria'));
    }
}
