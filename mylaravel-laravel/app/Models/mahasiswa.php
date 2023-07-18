<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Auth\EloquentUserProvider;


class Mahasiswa extends Model implements Authenticatable
{

    use AuthenticableTrait;
    use HasFactory;

    protected $fillable = [
        'nama_mhs',
        'nim',
        'mail_mhs',
        'role',
        'telp_mhs',
        'password'
    ];

    public function pemesanans()
    {
        return $this->hasMany(pemesanan::class);
    }

}
