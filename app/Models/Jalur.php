<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
    use HasFactory;

    protected $fillable = [
        'lokasi_id',
        'kenderaan_id',
        'hari'
    ];

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class);
    }

    public function kenderaan()
    {
        return $this->belongsTo(Kenderaan::class);
    }
}
