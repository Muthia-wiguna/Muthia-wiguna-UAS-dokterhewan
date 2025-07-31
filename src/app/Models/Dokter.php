<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'spesialis', 'kategori_dokter_id'];

    public function kategori()
    {
        return $this->belongsTo(KategoriDokter::class, 'kategori_dokter_id');
    }

    public function jadwals()
    {
        return $this->hasMany(JadwalHarian::class);
    }

    public function antrians()
    {
        return $this->hasMany(Antrian::class);
    }

    public function riwayat()
    {
        return $this->hasMany(RiwayatPemeriksaan::class);
    }
}
