<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perhitungan extends Model
{
    use HasFactory;
    protected $table = 'perhitungans';

    protected $fillable = [
        'nama',
        'penghasilan',
        'usia',
        'status_pekerjaan',
        'keluarga',
        'status_rumah',
        'penjamin',
        'cicilan',
        'bpkb_kendaraan',
        'lama_bekerja',
    ];

    // public function subkriteria()
    // {
    //     return $this->belongsTo(Subkriteria::class, 'penghasilan,','id')
    //                     ->withDefault(['users' => 'Tahun Akademik Belum Dipilih']);
    // }
}
