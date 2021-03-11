<?php 
class Car {

    //Properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    //Method = hello
    public function hello()
    {
        return "Beep I am a <i>" .$this ->comp . "</i>, and I am <i>" .$this->color;
    }
}

//Create object di class
$bmw = new Car();
$mercedes = new Car();

//Set values dari class properties.
$bmw-> color = 'blue';
$bmw->comp = "BMW";
$mercedes->comp = "Mercedes Benz";

//Call hello method untuk $bmw object
echo $bmw->hello();//Beep I am a BMW, and I am blue
?>