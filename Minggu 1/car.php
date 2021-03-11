<?php 
//declare
class Car {
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    //method = hello
    public function hello()
    {
        return "beep";
    }
}

//Membuat instance
$bmw = new Car ();
$mercedes = new Car ();

//Get Value
echo $bmw ->color; //beige
echo "<br />";
echo $mercedes ->color; //beige
echo "<hr />";

// Set value
$bmw ->color = 'blue';
$bmw ->comp = "BMW";
$mercedes ->comp = "Mercedez Benz";

//Get Value
echo $bmw ->color; //blue
echo "<br />";
echo $mercedes -> color; //beige
echo "<br />";
echo $bmw ->comp; //BMW
echo "<br />";
echo $mercedes ->comp; //Mercedez Benz
echo "<hr />";

//methods get a beep
echo $bmw -> hello(); // beep
echo "<br ?>";
echo $mercedes ->hello(); //beep
?>