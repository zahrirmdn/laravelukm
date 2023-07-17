<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class admin extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use HasFactory;

    protected $fillable = [
        'nama_admin',
        'telp_admin',
        'pass'
    ];

    protected $guarded = ['id'];
}
