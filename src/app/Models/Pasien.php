<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'jenis_hewan', 'umur', 'pemilik', 'kontak'];

    public function antrians()
    {
        return $this->hasMany(Antrian::class);
    }

    public function riwayat()
    {
        return $this->hasMany(RiwayatPemeriksaan::class);
    }
}
