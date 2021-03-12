<?php 

class Tablet {
    protected $merk;
    protected $camera;
    protected $memory;

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

//Output menampilkan Fatal error: Uncaught Error: Cannot access protected property handphone. Karena hak akses protected ini menghalangi kode program lain untuk mengaksesnya, selain class turunan.

?>