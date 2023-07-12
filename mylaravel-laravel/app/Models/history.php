<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_history',
        'event_id',
        'pembayaran_id',
        'admin_id'
    ];
}
