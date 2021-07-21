<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'nama', 'harga', 'harga_nameset', 'jenis', 'berat', 'kategori_id', 'gambar', 
    ];
}
