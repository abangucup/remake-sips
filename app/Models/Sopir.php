<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sopir extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kenderaan_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kenderaan()
    {
        return $this->belongsTo(Kenderaan::class);
    }
}
