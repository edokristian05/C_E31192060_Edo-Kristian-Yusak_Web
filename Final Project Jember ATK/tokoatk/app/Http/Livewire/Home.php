<?php

namespace App\Http\Livewire;

use App\Kategori;
use App\Produk;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'produks' => Produk::take(4)->get(),
            'kategoris' => Kategori::all()
        ]);
    }
}
