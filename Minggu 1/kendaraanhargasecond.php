<?php 
//declare class
class kendaraan{
    //properties
    public $jeniskendaraan;
    public $jumlahroda;
    public $merk;
    public $bahanbakar;
    public $harga;
    public $tahunpembuatan;


    //method
    function statusSubsidi()
    {
        if ($this->bahanbakar == "premium" && $this->tahunpembuatan < 2005) $status ='Dapat' ;
        else $status ='Tidak dapat';
        return $status;
    }
    function hargaSecond() {
        if ($this->tahunpembuatan > 2010)
            $second = $this->harga * 20/100;
        elseif ($this->tahunpembuatan >= 2005 && $this->tahunpembuatan <=2010)
            $second = $this->harga * 30/100;
        elseif ($this->tahunpembuatan < 2005)
            $second = $this->harga * 40/100;
        else $second ="Harga menyesuaikan";
            return $second;        
    }
    function setMerk($x)
    {
        $this->merk = $x;
    }
    function setTahunPembuatan($x)
    {
        $this->tahunpembuatan = $x;
    }
    function setHarga($x) {
        $this->harga = $x;
    }
    function setbahanBakar($x) {
        $this->bahanBakar = $x;
    }
}
    $kendaraan1 = new kendaraan ();
    $kendaraan1->setMerk("Honda Supra");
    $kendaraan1->setHarga(14000000);
    $kendaraan1->setTahunPembuatan(2000);

    echo "Merek kendaraan  : ".$kendaraan1->merk;
    echo "<br />";
    echo "Tahun pembuatan : ".$kendaraan1->tahunpembuatan;
    echo "<br />";
    echo "Harga normal : Rp. ".$kendaraan1->harga;
    echo "<br />";
    echo "Diskon yg didapat : Rp. ".$kendaraan1->hargaSecond();
    echo "<br />";
    echo "Harga setelah diskon : Rp. ";
    echo $kendaraan1->harga - $kendaraan1->hargaSecond();
?>