<?php 
//declare class
class kasus {
    public $processor;
    public $memory;
    public $operatingsystem;
    public $graphic;
    public $storage;
    public $merk;

    function statusLaptop(){
        if ($this->processor == "Intel Core i7" && $this->graphic == "GeForce GTX 1060" && $this->memory == "16GB") 
        $status = "Laptop Gaming";
        else $status = "Laptop Office";
        return $status;
    }
    function setMerk($x) {
        $this->merk = $x;
    }
    function setProcessor($x) {
        $this->processor = $x;
    }
    function setGraphic($x) {
        $this->graphic = $x;
    }
    function setMemory($x) {
        $this->memory = $x;
    }
    function setStorage($x) {
        $this->storage = $x;
    }
}

  $kasus1 = new kasus();
  $kasus1->setMerk("ASUS ROG GL553VD");
  $kasus1->setGraphic("GeForce GTX 1060");
  $kasus1->setProcessor("Intel Core i7");
  $kasus1->setMemory("16GB");
  
  $kasus2 = new kasus();
  $kasus2->setMerk("Lenovo IdeaPad Slim 3i");
  $kasus2->setGraphic("AMD Radeon RX Vega 5 iGPU");
  $kasus2->setProcessor("AMD Ryzen 3 4300U");
  $kasus2->setMemory("8GB");
  
  echo "Merk laptop : ".$kasus1->merk;
  echo "<br />";
  echo "Graphic : ".$kasus1->graphic;
  echo "<br />";
  echo "Processor : ".$kasus1->processor;
  echo "<br />";
  echo "Memory : ".$kasus1->memory;
  echo "<br />";
  echo "Status laptop : ".$kasus1->statusLaptop();
  echo "<hr />";

  echo "Merk laptop : ".$kasus2->merk;
  echo "<br />";
  echo "Graphic : ".$kasus2->graphic;
  echo "<br />";
  echo "Processor : ".$kasus2->processor;
  echo "<br />";
  echo "Memory : ".$kasus2->memory;
  echo "<br />";
  echo "Status laptop : ".$kasus2->statusLaptop();


?>