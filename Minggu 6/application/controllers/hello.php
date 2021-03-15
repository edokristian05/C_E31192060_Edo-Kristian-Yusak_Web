<?php 

class Hello extends CI_Controller{
    public function index () {
        //c1
        //echo "<h2>Hello World CI!</h2>";

        //c2  - Memanggil file view
        //$this -> load -> view('helloview');//file view

        //c3 - memuat model 'Hello_model'
        $this -> load -> model('Hello_model');

        //Pengambilkan objek dari kelas Hello_model dan dimuat di var $model
        $model = $this -> Hello_model;

        //Mengambil data dari model
        $a = $model -> txt;

        //Membuat data yang akan dikirim ke view
        $data['teks'] = $a;

        //Memanggil file view
        $this -> load -> view('helloview', $data);//file view
    }
}
?>