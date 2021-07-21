<?php

namespace App\Http\Livewire;

use App\Kategori;
use App\Produk;
use Livewire\Component;
use Livewire\WithPagination;

class ProdukKategori extends Component
{
    use WithPagination;

    public $search, $kategori;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function mount($kategoriId)
    {
        $kategoriDetail = Kategori::find($kategoriId);
        
        if($kategoriDetail) {
            $this->kategori = $kategoriDetail;
        }
    }

    public function render()
    {
        if($this->search) {
            $produks = Produk::where('kategori_id', $this->kategori->id)->where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        }else {
            $produks = Produk::where('kategori_id', $this->kategori->id)->paginate(8);
        }
        return view('livewire.product-index', [
            'produks' => $produks,
            'title' => 'Kategori '.$this->kategori->nama
        ]);
    }
}