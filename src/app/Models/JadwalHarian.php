<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalHarian extends Model
{
    use HasFactory;
    protected $fillable = ['dokter_id', 'tanggal', 'jadwal'];
    protected $casts = [ 'jadwal' => 'array' ];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
