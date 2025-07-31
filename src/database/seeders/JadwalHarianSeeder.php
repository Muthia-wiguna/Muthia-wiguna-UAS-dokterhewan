<?php

namespace Database\Seeders;

use App\Models\JadwalHarian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalHarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JadwalHarian::create([
            'dokter_id' => 1,
            'tanggal' => now()->toDateString(),
            'jadwal' => ['09:00', '10:00', '11:00']
        ]);
    }
}
