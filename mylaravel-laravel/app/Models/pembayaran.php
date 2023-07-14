<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_pembayaran',
        'total_bayar',
        'pemesanan_id',
        'tiket_id'
    ];

    public function pemesanans(){
        return $this->belongsTo(pemesanan::class,'pemesanan_id');
    }

    public function tikets(){
        return $this->belongsTo(Tiket::class,'tiket_id');
    }
}
