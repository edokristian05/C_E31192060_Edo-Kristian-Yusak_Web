<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function produks()
    {
        return $this->hasMany(Produks::class, 'kategori_id', 'id');
    }

}
