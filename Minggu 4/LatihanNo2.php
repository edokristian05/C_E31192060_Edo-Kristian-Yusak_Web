<?php 
class Topi {
    public $model;
    public function topiModel($x)
    {
        $this->model = $x;
    }
}
class Celana extends Topi {
    public $tipe;
    public $model;
    public function tipeCelana($x)
    {
        $this->tipe = $x;
    }
    public function celanaModel($x)
    {
        $this->model = $x;
    }
}
class Baju extends Celana {
    public $tipe;
    public function tipeBaju($x)
    {
        $this->tipe = $x;
    }
}
class ItemProduk extends Celana {
    public function Ukuran()
    {
        return "L";
    }
    public function Warna()
    {
        return "Navy";
    }
    public function Nama()
    {
        return "Eiger";
    }
    public function ItemDipilih()
    {
        $item1 = $this->Nama();
        $item2 = $this->Ukuran();
        $item3 = $this->Warna();

        return "Nama produk : $item1 <br />Ukuran : $item2 <br /> Warna : $item3";
        
    }
}
$konveksi = new Baju();
$konveksi->tipeBaju("Casual");
$konveksi2 = new ItemProduk();
echo "-- Daftar Baju $konveksi->tipe --";
echo "</br>";
echo $konveksi2->ItemDipilih();

?>