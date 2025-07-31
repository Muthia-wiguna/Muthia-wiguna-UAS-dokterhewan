<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::create(['nama' => 'drh. Budi', 'spesialis' => 'Bedah', 'kategori_dokter_id' => 2]);
        Dokter::create(['nama' => 'drh. Siti', 'spesialis' => 'Gigi', 'kategori_dokter_id' => 3]);
    }
}
