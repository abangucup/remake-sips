<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'role_id',
        'biodata_id',
        'username',
        'email',
        'password',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function biodata()
    {
        return $this->belongsTo(Biodata::class);
    }

    public function pengelola()
    {
        return $this->hasOne(Pengelola::class);
    }

    public function pelanggan()
    {
        return $this->hasOne(Pelanggan::class);
    }

    public function sopir()
    {
        return $this->hasOne(Sopir::class);
    }
}
