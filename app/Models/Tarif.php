<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $fillable = [
        'sumber_sampah',
        'biaya',
    ];

    public function pelanggans()
    {
        return $this->hasMany(Pelanggan::class);
    }
}
