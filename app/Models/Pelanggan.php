<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'desa_id',
        'user_id',
        'no_register',
    ];

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
