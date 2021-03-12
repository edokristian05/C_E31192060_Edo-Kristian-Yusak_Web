<?php 
// Membuat class mobiLengkap
class mobiLengkap {
    public function nontonTV()
    {
        return "Tv dihidupkan <br /> Tv mencari Channel <br /> Tv menampilkan gambar";
    }
}
// turunkan class mobiLengkap ke MobilBMW
class MobilBMW extends mobiLengkap {

}

// turunkan class mobilBMW ke MobilBMWberaksi
class MobilBMWberaksi extends MobilBMW {
    public function nontonTv()
    {
        return "Nonton Tv";
    }
    public function HidupkanMobil()
    {
        return "Hidupkan Mobil";
    }
    public function MatikanMobil()
    {
        return "Matikan Mobil";
    }
    public function ubahGigi()
    {
        return "Ubah Gigi";
    }
    public function MobilBeraksi()
    {
        $aksi1 = $this->nontonTv();
        $aksi2 = $this->HidupkanMobil();
        $aksi3 = $this->MatikanMobil();
        $aksi4 = $this->ubahGigi();
        
        return "$aksi1 <br /> $aksi2 <br /> $aksi3 <br /> $aksi4";
    }
}

// Buat object dari class mobilBMW (instansiasi)
$mobilku = new MobilBMWberaksi();

// Panggil method object
echo $mobilku->MobilBeraksi();
?>