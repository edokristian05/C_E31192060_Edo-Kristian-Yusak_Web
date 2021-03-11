<?php 
//declare class
class kendaraan{
    //properties
    public $jeniskendaraan;
    public $jumlahroda;
    public $merk;
    public $bahanbakar;
    public $warna;
    public $tahunpembuatan;


    //method
    function statusSubsidi()
    {
        if ($this->bahanbakar == "premium" && $this->tahunpembuatan < 2005) $status ='Dapat' ;
        else $status ='Tidak dapat';
        return $status;
    }
    function setMerk($x)
    {
        $this->merk = $x;
    }
    function setTahunPembuatan($x)
    {
        $this->tahunpembuatan = $x;
    }
    function setBahanBakar($x)
    {
        $this->bahanbakar = $x;
    }
}
$kendaraan = new kendaraan();
$kendaraan->setMerk("Scoopy");
$kendaraan->setTahunPembuatan(2019);
$kendaraan->setBahanBakar("solar");
echo "Motor ".$kendaraan->merk." tahun pembuatan ".$kendaraan->tahunpembuatan." dengan bahan bakar ".$kendaraan->bahanbakar." apakah mendapatkan subsidi ? ".$kendaraan->statusSubsidi();
?>