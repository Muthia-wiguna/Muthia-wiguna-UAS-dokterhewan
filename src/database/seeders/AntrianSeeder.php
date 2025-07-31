<?php

namespace Database\Seeders;

use App\Models\Antrian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AntrianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Antrian::create([
            'pasien_id' => 1,
            'dokter_id' => 1,
            'status' => 'menunggu',
            'waktu_masuk' => now()
        ]);
    }
}
