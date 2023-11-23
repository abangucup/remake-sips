<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_sampah'
    ];

    public function sampahs()
    {
        return $this->hasMany(Sampah::class);
    }
}
