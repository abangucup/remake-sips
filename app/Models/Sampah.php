<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_id',
        'nama_sampah',
        'jumlah_sampah',
        'tanggal_lapor',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
