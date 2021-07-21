<?php

namespace App\Http\Controllers;

use App\Pesanan;
use App\Produk;
use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller {

    public function index(){
        $transaksiPading['listPanding'] = Pesanan::whereStatus(1)->get();

        $transaksiSelesai['listDone'] = Pesanan::where("Status", "NOT LIKE", 1)->get();

        return view('transaksi')->with($transaksiPading)->with($transaksiSelesai);
    }

    public function batal($id){
        $transaksi = Pesanan::with(['pesanan_details.produk', 'user'])->where('id', $id)->first();
        $transaksi->update([
            'status' => "BATAL"
        ]);
        return redirect('transaksi');
    }

    public function confirm($id){
        $transaksi = Pesanan::with(['pesanan_details.produk', 'user'])->where('id', $id)->first();
        $transaksi->update([
            'status' => "PROSES"
        ]);
        return redirect('transaksi');
    }

    public function kirim($id){
        $transaksi = Pesanan::with(['pesanan_details.produk', 'user'])->where('id', $id)->first();
        $transaksi->update([
            'status' => "DIKIRIM"
        ]);
        return redirect('transaksi');
    }

    public function selesai($id){
        $transaksi = Pesanan::with(['pesanan_details.produk', 'user'])->where('id', $id)->first();
        $transaksi->update([
            'status' => "SELESAI"
        ]);
        return redirect('transaksi');
    }

    public function pushNotif($title, $message, $mFcm) {

        $mData = [
            'title' => $title,
            'body' => $message
        ];

        $fcm[] = $mFcm;

        $payload = [
            'registration_ids' => $fcm,
            'notification' => $mData
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                "Content-type: application/json",
                "Authorization: key=AAAAcv1o4p8:APA91bGntzKph5P-OQXUvLqBnn3simMe7fW5B-vmki1HsFHOGAD2pu4ZQYKuaJzawAHqmSwWGeO_g3Abin_tWrYSOPShbByNlZ7-YwGk4JZC2oXXTIBWVbdwtNRTMKk6gA1IAXccoY8B"
            ),
        ));
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));

        $response = curl_exec($curl);
        curl_close($curl);

        $data = [
            'success' => 1,
            'message' => "Push notif success",
            'data' => $mData,
            'firebase_response' => json_decode($response)
        ];
        return $data;
    }
}