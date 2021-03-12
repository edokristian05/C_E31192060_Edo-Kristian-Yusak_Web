<?php 

class Tablet {
    private $merk;
    private $camera;
    private $memory;

    public function beli_tablet()
    {
        return "-- Beli Tablet Baru --";
    }
}

class handphone extends Tablet{
    public $handphone_baru;

    public function beli_handphone()
    {
        return "Merk : $this->merk <br /> Camera : $this->camera <br /> Memory : $this->memory";
    }
}
$handphoneBaru = new handphone();

$handphoneBaru->merk = "Iphone 11 Pro Max";
$handphoneBaru->camera = "20 Pixel";
$handphoneBaru->memory = " 8 GB";

echo $handphoneBaru->beli_tablet();
echo "<br />";
echo $handphoneBaru->beli_handphone();

// Hasil output menampilkan seperti pada output enkapsulasi public akan tetapi pada object private menampilkan notifikasi Symbol '$memory' is declared but not used, karena dalam enkapsulasi object private memungkinkan Jika sebuah property atau method di-setsebagai private, maka satu-satunya yang bisa mengakses adalah class itu sendiri. Class lain tidak bisa mengaksesnya, termasuk class turunan.
?>