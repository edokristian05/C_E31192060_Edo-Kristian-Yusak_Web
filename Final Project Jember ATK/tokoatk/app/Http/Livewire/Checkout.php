<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Pesanan;
use Livewire\Component;

class Checkout extends Component
{
    public $total_harga, $nohp, $alamat;
    public function mount()
    {
        if(!Auth::user()){
            return redirect()->route('login');
        }
        $this->nohp = Auth::user()->nohp;
        $this->alamat = Auth::user()->alamat;

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if(!empty($pesanan))
        {
            $this->total_harga = $pesanan->total_harga;
        }else{
            return redirect()->route('home');
        }
    }

    public function checkout()
    {
        $this->validate([
            'nohp' => 'required',
            'alamat' => 'required'
        ]);
        //simpan nohp alamat
        $user = User::where('id', Auth::user()->id)->first();
        $user->nohp = $this->nohp;
        $user->alamat = $this->alamat;
        $user->update();
        //update data pesanan

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->status = 1;
        $pesanan->update();

        $this->emit('masukKeranjang');

        session()->flash('message', "Sukses Checkout");

        return redirect()->route('history');
    }
    public function render()
    {
        return view('livewire.checkout');
    }
}
