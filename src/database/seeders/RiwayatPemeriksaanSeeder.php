<?php

namespace Database\Seeders;

use App\Models\RiwayatPemeriksaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiwayatPemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RiwayatPemeriksaan::create([
            'pasien_id' => 1,
            'dokter_id' => 1,
            'diagnosa' => 'Infeksi ringan',
            'tindakan' => 'Diberikan antibiotik',
            'waktu' => now()
        ]);
    }
}
