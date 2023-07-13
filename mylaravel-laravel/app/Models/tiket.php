<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tiket extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_tiket',
        'harga',
        'nama_tiket',
        'event_id',
        'pemesanan_id'
    ];

    protected $guarded = ['id'];

    public function events(){
        return $this->belongsTo(Event::class);
    }

    public function pemesanans(){
        return $this->belongsTo(pemesanan::class);
    }

}
