<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_desa',
    ];

    public function pengelolas()
    {
        return $this->hasMany(Pengelola::class);
    }


    public function lokasis()
    {
        return $this->hasMany(Lokasi::class);
    }
}
