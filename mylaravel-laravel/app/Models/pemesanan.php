<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'tglpesan',
        'total_pesanan',
        'nim'
    ];

    protected $guarded = ['id'];

    public function tikets()
    {
        return $this->hasMany(Tiket::class);
    }

    public function pembayarans(){
        return $this->hasOne(Pembayaran::class);
    }

    public function mahasiswas(){
        return $this->belongsTo(Mahasiswa::class);
    }

}
