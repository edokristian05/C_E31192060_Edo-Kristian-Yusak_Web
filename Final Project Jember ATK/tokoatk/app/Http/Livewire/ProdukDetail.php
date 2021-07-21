<?php

namespace App\Http\Livewire;

use App\Pesanan;
use App\PesananDetail;
use App\Produk;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProdukDetail extends Component
{
    public $produk, $jumlah_pesanan; 
    public function mount($id)
    {
        $produkDetail = Produk::find($id);
        
        if($produkDetail) {
            $this->produk = $produkDetail;
        }
    }   
    public function tambahKeranjang()
    {
        $this->validate([
            'jumlah_pesanan' => 'required'
        ]);
        
        //Validasi jika belum login
        if(!Auth::user()){
            return redirect()->route('login');
        }
        //menghitung total harga
        $total_harga = $this->jumlah_pesanan*$this->produk->harga;

        //ngecek apakah user punya data pesanan utama yg statusnya 0
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        //menyimpan atau update data pesanan utama
        if(empty($pesanan))
        {
            Pesanan::create([
                'user_id' => Auth::user()->id,
                'total_harga' => $total_harga,
                'status' => 0,
                'kode_unik' => mt_rand(100, 999),
            ]);

            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
            $pesanan->kode_pemesanan = 'JP-'.$pesanan->id;
            $pesanan->update();
        }else{
            $pesanan->total_harga = $pesanan->total_harga+$total_harga;
            $pesanan->update();
        }

        //menyimpan pesanan 
        PesananDetail::create([
            'produk_id' => $this->produk->id,
            'pesanan_id' => $pesanan->id,
            'jumlah_pesanan' => $this->jumlah_pesanan,
            'total_harga' => $total_harga
        ]);

        $this->emit('masukKeranjang');

        session()->flash('message', 'Sukses masuk keranjang');
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.produk-detail');
    }
}
