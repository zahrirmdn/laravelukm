<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_admin',
        'telp_admin',
        'isadmin',
        'pass'
    ];

    protected $guarded = ['id'];
}
