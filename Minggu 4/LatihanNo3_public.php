<?php 

class Tablet {
    public $merk;
    public $camera;
    public $memory;

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

// Hasil output menampilkan -- Beli Tablet Baru --Merk : Iphone 11 Pro Max , Camera : 20 Pixel, Memory : 8 GB
?>