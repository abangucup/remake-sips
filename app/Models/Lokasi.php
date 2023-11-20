<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lokasi',
        'desa_id',
    ];

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }

    public function jalurs()
    {
        return $this->hasMany(Jalur::class);
    }
}
