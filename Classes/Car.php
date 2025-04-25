<?php

class Car {

    // properties /Fields
    private $brand;
    private $color;
    public $vehicletype = "car";

    // Constructor 
    public function __construct($brand, $color="None" )
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method

    public function getCarInfo(){
        return "Brand:" . $this->brand . " Color:" . $this->color;
    }
}

$car01 = new Car ("Volvo", "green");
$car01->getCarInfo();
echo $car01->vehicletype;