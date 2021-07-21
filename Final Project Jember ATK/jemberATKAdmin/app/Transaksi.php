<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['id', 'kode_pemesanan',
        'status', 'total_harga', 'kode_unik', 'user_id',
        'created_at', 'updated_at'];

    public function details(){
        return $this->hasMany(TransaksiDetail::class, "pesanan_id", "id");
    }

    public function user(){
        return $this->belongsTo(User::class, "user_id", "id");
    }
}