<?php 

class Car {

    // Public methods & properties
    public $model;

    public function getModel()
    {
        return "The car model is " . $this -> model;
    }
}

$mercedes = new Car();
// Akses property dari dalam class
$mercedes -> model = "Mercedes Benz";
// Akses property dari luar class
echo $mercedes->getModel();
?>