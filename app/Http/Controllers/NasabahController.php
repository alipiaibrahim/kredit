<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Session;

class NasabahController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $nasabahs = Nasabah::all();
        return view('datadiri.show', compact('user', 'nasabahs'));
    }

    public function create()
    {
        return view('datadiri.tambah');
    }
    public function store(Request $req)
    {
        $nasabah = new Nasabah;

        $nasabah->nama = $req->get('nama');
        $nasabah->no_ktp = $req->get('no_ktp');
        $nasabah->alamat = $req->get('alamat');
        $nasabah->desa = $req->get('desa');
        $nasabah->kecamatan = $req->get('kecamatan');
        $nasabah->kabupaten = $req->get('kabupaten');
        $nasabah->pekerjaan = $req->get('pekerjaan');
        $nasabah->tlpn = $req->get('tlpn');
        $nasabah->email = $req->get('email');
        $nasabah->tujuan_pinjaman = $req->get('tujuan_pinjaman');

        $nasabah->save();
        // $success = true;
        // $message = "Data Diri Berhasil Ditambah";
        // return response()->json([
        //     'success' => $success,
        //     'message' => $message,
        // ]);
        // Session::flash('status', 'Tambah data Nilai berhasil!!!');
        return redirect()->route('datadiri.show')->with('success', 'Data berhasil diperbarui.');
    }
    public function edit($id)
    {
        $nasabah = Nasabah::find($id);
        return view('datadiri.edit', compact('nasabah'));
    }

    public function update(Request $req, $id)
    {
        $nasabah = Nasabah::find($id);
        $nasabah->nama = $req->get('nama');
        $nasabah->no_ktp = $req->get('no_ktp');
        $nasabah->alamat = $req->get('alamat');
        $nasabah->desa = $req->get('desa');
        $nasabah->kecamatan = $req->get('kecamatan');
        $nasabah->kabupaten = $req->get('kabupaten');
        $nasabah->pekerjaan = $req->get('pekerjaan');
        $nasabah->tlpn = $req->get('tlpn');
        $nasabah->email = $req->get('email');
        $nasabah->tujuan_pinjaman = $req->get('tujuan_pinjaman');

        $nasabah->save();

        return redirect()->route('datadiri.show')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $nasabah = Nasabah::find($id);
        // storage::delete('public/photo_user/' . $req->get('old_photo'));
        $nasabah->delete();

        Session::flash('status', 'Hapus data nasabah berhasil!!!');
        return redirect()->back();
    }
}
