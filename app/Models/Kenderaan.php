<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kenderaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_kenderaan',
        'nama_kenderaan',
        'jenis_id',
        'nomor_polisi',
    ];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }

    public function sopir()
    {
        return $this->hasOne(Sopir::class);
    }

    public function jalurs()
    {
        return $this->hasMany(Jalur::class);
    }
}
