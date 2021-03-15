<?php 

class tugas3 extends CI_Controller{
    public function index () {

        //memuat model 'Helloworld_model'
        $this -> load -> model('tugas3_model');

        //Pengambilkan objek dari kelas Helloworld_modell dan dimuat di var $model
        $model = $this -> tugas3_model;

        //Mengambil data dari model
        $a = $model -> txt;

        //Membuat data yang akan dikirim ke view
        $data['teks'] = $a;

        //Memanggil file view
        $this -> load -> view('tugas3view', $data);//file view
    }
}
?>