<?php

namespace Database\Seeders;

use App\Models\Rujukan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RujukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rujukan::create([
            'dari_dokter_id' => 1,
            'ke_dokter_id' => 2,
            'alasan' => 'Butuh penanganan spesialis gigi'
        ]);
    }
}
