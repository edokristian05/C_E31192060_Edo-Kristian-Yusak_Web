<?php 

interface hitungLuas {
    
    public function LuasbangunDatar();

}

class hitungLuasPersegi implements hitungLuas {
    private $sisi = 6;

    public function __construct($sisi)
    {
        $this -> sisi = $sisi;
    }
    public function LuasbangunDatar()
    {
        return pow($this->sisi,2);
    }
}

class hitungLuasSegitiga implements hitungLuas{
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this -> alas = $alas;
        $this -> tinggi = $tinggi;
    }

    public function LuasbangunDatar()
    {
        return (0.5 * $this-> alas * $this -> tinggi);
    }
}

class hitungLuasLingkaran implements hitungLuas
{
    private $jarijari = 7;

    public function __construct($jarijari)
    {
        $this -> jarijari = $jarijari;
    }

    public function LuasbangunDatar()
    {
        return (3.14 * pow($this->jarijari,2));
    }
}

$persegi = new hitungLuasPersegi(6);
echo 'Luas Persegi = '. $persegi->LuasbangunDatar() . "<br>";

$segitiga = new hitungLuasSegitiga(4,5);
echo 'Luas Segitiga = '. $segitiga->LuasbangunDatar() . "<br>";

$lingkaran = new hitungLuasLingkaran(7);
echo 'Luas Lingkaran = '. $lingkaran->LuasbangunDatar() . "<br>"; 
?>