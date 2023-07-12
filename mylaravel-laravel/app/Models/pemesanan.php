<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tglpesan',
        'total_pesanan',
    ];

    protected $guarded = ['id'];

    public function tikets()
{
    return $this->hasMany(Tiket::class);
}

}