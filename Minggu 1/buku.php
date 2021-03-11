<?php 
//declare class
class Buku {
    // properties
    public $judul;
    public $pengarang;
    public $penerbit;
    public $tahunterbit;
    public $cetakan;

    //method
    function setJudul ($x)
    {
        $this->judul = $x;
    }
    function setPengarang($x)
    {
        $this->pengarang = $x;
    }
    function setPenerbit($x)
    {
        $this->penerbit = $x;
    }
    function setTahunTerbit ($x)
    {
        $this->tahunterbit = $x;
    }
    function setCetakan ($x)
    {
        $this->cetakan = $x;
    }
}
//Membuat Instance
$buku = new buku ();

//Set Value
$buku->setJudul("Dilan 1990");
$buku->setPengarang("Pidi Baiq");
$buku->setPenerbit("Pastel Books");
$buku->setTahunTerbit(2015);
$buku->setCetakan("PT Mizan Pustaka");

//Get Value
echo $buku->judul;
echo "<br />";
echo $buku->pengarang;
echo "<br />";
echo $buku->penerbit;
echo "<br />";
echo $buku->tahunterbit;
echo "<br />";
echo $buku->cetakan;

?>