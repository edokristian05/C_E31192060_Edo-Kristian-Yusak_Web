<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaksi;
use App\TransaksiDetail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function store(Request $requset){
        //nama, email, password
        $validasi = Validator::make($requset->all(), [
            'user_id' => 'required',
            'total_item' => 'required',
            'total_harga' => 'required',
            'jasa_pengiriman' => 'required',
            'ongkir' => 'required',
            'total_transfer' => 'required',
            'bank' => 'required',
            'phone' => 'required'
        ]);

        if($validasi->fails()){
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $kode_payment = "INV/PYM/".now()->format('Y-m-d')."/".rand(100, 999);
        $kode_trx = "INV/PYM/".now()->format('Y-m-d')."/".rand(100, 999);
        $kode_unik = rand(100, 999);
        $status = "MENUNGGU";
        $expired_at = now()->addDay();

        $dataTransaksi = array_merge($requset->all(),  [
            'kode_payment' => $kode_payment,
            'kode_trx' => $kode_trx,
            'kode_unik' => $kode_unik,
            'status' => $status,
            'expired_at' => $expired_at
        ]);
        
        DB::beginTransaction();
        $transaksi = Transaksi::create($dataTransaksi);
        foreach ($requset->produks as  $produk){
            $detail = [
                'transaksi_id' => $transaksi->id,
                'produk_id' => $produk['id'],
                'total_item' => $produk['total_item'],
                'catatan' => $produk['catatan'],
                'total_harga' => $produk['total_harga']
            ];
            $transaksiDetail = TransaksiDetail::create($detail);
        }

        if(!empty($transaksi) && !empty($transaksiDetail)){
            DB::commit();
            return response()->json([
                'success' => 1,
                'message' => 'Transaksi Berhasil',
                'transaksi' => collect($transaksi)
            ]);
        }else {
            DB::rollBack();
            $this->error('Transaksi Gagal');
        }

}
    public function history($id){

        $transaksis = Transaksi::with(['user'])->whereHas('user', function($query) use ($id){
            $query->whereId($id);
        })->get();

        foreach($transaksis as $transaksi){
            $details = $transaksi->details;
            foreach($details as $detail){
                $detail->produk;
            }

        }

        if(!empty($transaksis)){
            return response()->json([
                'success' => 1,
                'message' => 'Transaksi Berhasil',
                'transaksis' => collect($transaksis)
            ]);
        }else {
            $this->error('Transaksi Gagal');
        }

    }

    public function batal($id){
        $transaksi = Transaksi::with(['details.produk', 'user'])->where('id', $id)->first();
        if ($transaksi){
            // update data

            $transaksi->update([
                'status' => "BATAL"
            ]);
            // $this->pushNotif('Transaksi Dibatalkan', "Transasi produk ".$transaksi->details[0]->produk->name." berhsil dibatalkan", $transaksi->user->fcm);

            return response()->json([
                'success' => 1,
                'message' => 'Berhasil',
                'transaksi' => $transaksi
            ]);
        } else {
            return $this->error('Gagal memuat transaksi');
        }
    }

    public function error($pasan){
        return response()->json([
            'success' => 0,
            'message' => $pasan
            ]);
        }
}