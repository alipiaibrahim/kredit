<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
    use HasFactory;
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id')
            ->withDefault(['kriteria_id' => 'Kriteria Belum Dipilih']);
    }
}
