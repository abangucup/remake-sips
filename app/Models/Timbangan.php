<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timbangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kenderaan_id',
        'berat_sampah'
    ];

    public function kenderaan()
    {
        return $this->belongsTo(Kenderaan::class);
    }
}
