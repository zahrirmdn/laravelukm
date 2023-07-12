<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detil_pesan extends Model
{
    use HasFactory;

    protected $fillable = [
        'mahasiswa_id',
        'pemesanan_id'
    ];

}
