<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriDokter extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(KategoriDokter::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(KategoriDokter::class, 'parent_id');
    }

    public function dokters()
    {
        return $this->hasMany(Dokter::class);
    }
}
