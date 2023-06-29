<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kriteria;

class CreateKriteriasSeeder extends Seeder
{

    public function run()
    {
        $kriterias = [
            [
                'id' => 1,
                'nama' => 'Penghasilan',
                'bobot' => '0.20',
            ],
            [
                'id' => 2,
                'nama' => 'Usia',
                'bobot' => '0.15',
            ],
            [
                'id' => 3,
                'nama' => 'Status Pekerjaan',
                'bobot' => '0.15',
            ],
            [
                'id' => 4,
                'nama' => 'Keluarga',
                'bobot' => '0.12',
            ],
            [
                'id' => 5,
                'nama' => 'Status Rumah',
                'bobot' => '0.10',
            ],
            [
                'id' => 6,
                'nama' => 'Penjamin',
                'bobot' => '0.10',
            ],
            [
                'id' => 7,
                'nama' => 'Cicilan',
                'bobot' => '0.08',
            ],
            [
                'id' => 8,
                'nama' => 'BPKB Kendaraan',
                'bobot' => '0.05',
            ],
            [
                'id' => 9,
                'nama' => 'Lama Bekerja',
                'bobot' => '0.05',
            ]
        ];

        foreach ($kriterias as $key => $kriteria) {
            Kriteria::create($kriteria);
        }
    }
}
