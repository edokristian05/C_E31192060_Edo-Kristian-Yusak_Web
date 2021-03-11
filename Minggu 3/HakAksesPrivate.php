<?php 

class Car {

    // Private
    private $model;

    public function getModel()
    {
        return "The car model is " . $this-> model;
    }
}

$mercedes = new Car();

// Akses property dari luar class
$mercedes->model = "Mercedes Benz";
echo $mercedes->getModel();
?>