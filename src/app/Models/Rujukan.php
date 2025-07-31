<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model
{
    use HasFactory;
    protected $fillable = ['dari_dokter_id', 'ke_dokter_id', 'alasan'];

    public function dari()
    {
        return $this->belongsTo(Dokter::class, 'dari_dokter_id');
    }

    public function ke()
    {
        return $this->belongsTo(Dokter::class, 'ke_dokter_id');
    }
}
