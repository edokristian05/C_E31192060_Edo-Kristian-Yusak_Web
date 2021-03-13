<?php 
interface Car { 
    public function setModel($name);
    
    public function getModel();
  }
  class miniCar implements Car {
    private $model; 
     
    public function setModel($name)
    { 
      $this -> model = $name; 
    }
    
    public function getModel()
    {
      return $this -> model; 
    }
  }
  $mobil = new miniCar();
  $mobil2 = new miniCar();
  $mobil3 = new miniCar();

  $mobil->setModel("Multi-purpose vehicle");
  $mobil2->setModel("Sedan");
  $mobil3->setModel("Hatchback");

  echo "<b> Jenis minicar sesuai kebutuhan : </b><br />";
  echo $mobil->getModel();
  echo "<br />";
  echo $mobil2->getModel();
  echo "<br />";
  echo $mobil3->getModel();
?>