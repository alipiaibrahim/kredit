<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subkriteria;

class CreateSubkriteriasSeeder extends Seeder
{

    public function run()
    {
        $subkriterias = [
            [
                'id' => 1,
                'kriteria_id' => 1,
                'nama' => '2jt-4jt',
                'bobot_subkriteria' => '10',
                'bobot_kriteria' => '20',
                'hasil' => '0.5',
            ],
            [
                'id' => 2,
                'kriteria_id' => 1,
                'nama' => '5jt-8jt',
                'bobot_subkriteria' => '15',
                'bobot_kriteria' => '20',
                'hasil' => '0.75',
            ],
            [
                'id' => 3,
                'kriteria_id' => 1,
                'nama' => '9jt>',
                'bobot_subkriteria' => '20',
                'bobot_kriteria' => '20',
                'hasil' => '1.00',
            ],
            [
                'id' => 4,
                'kriteria_id' => 2,
                'nama' => '20-30',
                'bobot_subkriteria' => '5',
                'bobot_kriteria' => '15',
                'hasil' => '0.34',
            ],
            [
                'id' => 5,
                'kriteria_id' => 2,
                'nama' => '41-50',
                'bobot_subkriteria' => '10',
                'bobot_kriteria' => '15',
                'hasil' => '0.67',
            ],
            [
                'id' => 6,
                'kriteria_id' => 2,
                'bobot_subkriteria' => '15',
                'bobot_kriteria' => '15',
                'nama' => '31-40',
                'hasil' => '1',
            ],
            [
                'id' => 7,
                'kriteria_id' => 3,
                'nama' => 'Swasta',
                'bobot_subkriteria' => '5',
                'bobot_kriteria' => '15',
                'hasil' => '0.34',
            ],
            [
                'id' => 8,
                'kriteria_id' => 3,
                'nama' => 'PNS',
                'bobot_subkriteria' => '10',
                'bobot_kriteria' => '15',
                'hasil' => '0.67',
            ],
            [
                'id' => 9,
                'kriteria_id' => 3,
                'nama' => 'Wirausaha',
                'bobot_subkriteria' => '15',
                'bobot_kriteria' => '15',
                'hasil' => '1.00',
            ],
            [
                'id' => 10,
                'kriteria_id' => 4,
                'nama' => '5>=',
                'bobot_subkriteria' => '4',
                'bobot_kriteria' => '12',
                'hasil' => '0.34',
            ],
            [
                'id' => 11,
                'kriteria_id' => 4,
                'nama' => '3-4',
                'bobot_subkriteria' => '8',
                'bobot_kriteria' => '12',
                'hasil' => '0.67',
            ],
            [
                'id' => 12,
                'kriteria_id' => 4,
                'nama' => '1-2',
                'bobot_subkriteria' => '12',
                'bobot_kriteria' => '12',
                'hasil' => '1.00',
            ],
            [
                'id' => 13,
                'kriteria_id' => 5,
                'nama' => 'Kontrak',
                'bobot_subkriteria' => '2',
                'bobot_kriteria' => '10',
                'hasil' => '0.20',
            ],
            [
                'id' => 14,
                'kriteria_id' => 5,
                'nama' => 'Milik Keluarga',
                'bobot_subkriteria' => '6',
                'bobot_kriteria' => '10',
                'hasil' => '0.60',
            ],
            [
                'id' => 15,
                'kriteria_id' => 5,
                'nama' => 'Milik Pribadi',
                'bobot_subkriteria' => '10',
                'bobot_kriteria' => '10',
                'hasil' => '1.00',
            ],
            [
                'id' => 16,
                'kriteria_id' => 6,
                'nama' => 'Orang Lain',
                'bobot_subkriteria' => '2',
                'bobot_kriteria' => '10',
                'hasil' => '0.20',
            ],
            [
                'id' => 17,
                'kriteria_id' => 6,
                'nama' => 'Kerabat Jauh',
                'bobot_subkriteria' => '6',
                'bobot_kriteria' => '10',
                'hasil' => '0.60',
            ],
            [
                'id' => 18,
                'kriteria_id' => 6,
                'nama' => 'Keluarga',
                'bobot_subkriteria' => '10',
                'bobot_kriteria' => '10',
                'hasil' => '1.00',
            ],
            [
                'id' => 19,
                'kriteria_id' => 7,
                'nama' => 'Ya',
                'bobot_subkriteria' => '1',
                'bobot_kriteria' => '8',
                'hasil' => '0.13',
            ],
            [
                'id' => 20,
                'kriteria_id' => 7,
                'nama' => 'Tidak',
                'bobot_subkriteria' => '8',
                'bobot_kriteria' => '8',
                'hasil' => '1.00',
            ],
            [
                'id' => 21,
                'kriteria_id' => 8,
                'nama' => 'Milik Orang Lain',
                'bobot_subkriteria' => '1',
                'bobot_kriteria' => '5',
                'hasil' => '0.20',
            ],
            [
                'id' => 22,
                'kriteria_id' => 8,
                'nama' => 'Milik Keluarga',
                'bobot_subkriteria' => '3',
                'bobot_kriteria' => '5',
                'hasil' => '0.60',
            ],
            [
                'id' => 23,
                'kriteria_id' => 8,
                'nama' => 'Milik Sendiri',
                'bobot_subkriteria' => '5',
                'bobot_kriteria' => '5',
                'hasil' => '1.00',
            ],
            [
                'id' => 24,
                'kriteria_id' => 9,
                'nama' => '>=16 Tahun',
                'bobot_subkriteria' => '1',
                'bobot_kriteria' => '5',
                'hasil' => '0.20',
            ],
            [
                'id' => 25,
                'kriteria_id' => 9,
                'nama' => '1-5 Tahun',
                'bobot_subkriteria' => '3',
                'bobot_kriteria' => '5',
                'hasil' => '0.60',
            ],
            [
                'id' => 26,
                'kriteria_id' => 9,
                'bobot_subkriteria' => '5',
                'bobot_kriteria' => '5',
                'nama' => '6-15 Tahun',
                'hasil' => '1.00',
            ]
        ];

        foreach ($subkriterias as $key => $subkriteria) {
            Subkriteria::create($subkriteria);
        }
    }
}
