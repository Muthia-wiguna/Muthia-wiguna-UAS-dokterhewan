<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create([
            'nama' => 'Max',
            'jenis_hewan' => 'Anjing',
            'umur' => 5,
            'pemilik' => 'Andi',
            'kontak' => '08123456789'
        ]);
    }
}
