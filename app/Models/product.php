<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'nama_barang',
        'jumlah_barang',
        'harga_barang'
    ];
}
