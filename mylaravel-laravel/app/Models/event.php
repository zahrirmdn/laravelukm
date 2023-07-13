<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_event',
        'tgl_event',
    ];

    protected $guarded = ['id'];

    public function tikets(){
        return $this->hasMany(Tiket::class);
    }
}
