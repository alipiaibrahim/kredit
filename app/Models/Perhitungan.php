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


}
