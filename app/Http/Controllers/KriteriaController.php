<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subkriteria;
use App\Models\Kriteria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Session;

class KriteriaController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $subkriterias = Subkriteria::with('kriteria')->get();
        $kriterias = Kriteria::all();
        return view('kriteria.show', compact('user', 'subkriterias'));
    }

    public function edit($id)
    {
        $subkriteria = Subkriteria::find($id);

        return view('kriteria.edit', compact('subkriteria'));
    }

    public function update(Request $request, $id)
    {
        $subkriteria = Subkriteria::find($id);
        $subkriteria->kriteria_id = $request->get('kriteria_id');
        $subkriteria->nama = $request->get('nama');
        $subkriteria->bobot_subkriteria = $request->get('bobot_subkriteria');
        $subkriteria->bobot_kriteria = $request->get('bobot_kriteria');
        $subkriteria->hasil = $this->hitungHasil($subkriteria->bobot_subkriteria, $subkriteria->bobot_kriteria);
        $subkriteria->save();
        return redirect()->route('kriteria.show')->with('success', 'Akun berhasil diubah.');
    }
    private function hitungHasil($bobotSubkriteria, $bobotKriteria)
    {
        if ($bobotKriteria != 0) {
            return $bobotSubkriteria / $bobotKriteria;
        } else {
            return 0; // Atau nilai default lainnya
        }
    }
}
