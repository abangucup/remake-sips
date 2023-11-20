<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'alamat',
        'no_hp',
        'jenis_kelamin',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
