<?php 
class laptop {

    // Properties
    public $pemilik;
    public $merk;

    // Method
    public function hidupkan_laptop()
    {
        return "Hidupkan laptop <i>" .$this->merk . "</i> punya" .$this->pemilik;
    }

    public function matikan_laptop()
    {
        return "Matikan laptop <i>" .$this->merk . "</i> punya" .$this->pemilik;
    }

    public function restart_laptop()
    {
        $restart = "Matikan laptop <i>" .$this->merk . "</i> punya" .$this->pemilik;

        $restart2 = " Hidupkan laptop <i>" .$this->merk . "</i> punya" .$this->pemilik;

        $restart .= $restart2;
        return $restart;
    }
}

    // Object
    $laptop = new laptop();
    $laptop2 = new laptop();
    $laptop3 = new laptop();

    //Set values dari class properties.//Set values dari class properties.
    $laptop->merk = "ASUS";
    $laptop->pemilik = " A.";

    $laptop2->merk = "Acer";
    $laptop2->pemilik = " B.";

    $laptop3->merk = "Lenovo";
    $laptop3->pemilik = " C.";

    echo $laptop->hidupkan_laptop();
    echo "<br>";
    echo $laptop2->matikan_laptop();
    echo "<br>";
    echo $laptop3->restart_laptop();

?>