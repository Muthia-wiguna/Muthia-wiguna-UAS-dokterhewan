<?php

namespace Database\Seeders;

use App\Models\KategoriDokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriDokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $umum = KategoriDokter::create(['nama' => 'Umum']);
        $bedah = KategoriDokter::create(['nama' => 'Bedah']);
        $gigi = KategoriDokter::create(['nama' => 'Gigi']);
    }
}
