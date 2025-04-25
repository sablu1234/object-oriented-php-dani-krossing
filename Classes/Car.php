<?php

class Car {

    // properties /Fields
    private $brand;
    private $color;

    // Constructor 
    public function __construct($brand, $color="None" )
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Getter & setter method
    public function getBrand(){
        return $this->brand;
    }

    public function setBrand($brand){
         $this->brand = $brand;
    }


    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $allowedColors =[
            "red",
            "blue",
            "green",
            "yellow"
        ];

        if(in_array($color, $allowedColors)){
            $this->color = $color;
        }
    }
    // Method

    public function getCarInfo(){
        return "Brand:" . $this->brand . " Color:" . $this->color;
    }
}
