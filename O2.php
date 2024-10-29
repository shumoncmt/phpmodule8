<?php
//Motorcycle Price Calculator

class MileageCalculator{
    public $pricePerLiter;
    public $distance;
    public $totalFuelPrice;
    function calculatorKM(){
        $totalFuel =$this->totalFuelPrice/$this->pricePerLiter;
        $mileage = $this->distance/$totalFuel;
        echo "The mileage of the vehicle is {$mileage} km \n";
    }
}

$motorcycle = new MileageCalculator();
$motorcycle->pricePerLiter= 122;
$motorcycle->distance = 100;
$motorcycle->totalFuelPrice = 800;
$motorcycle->calculatorKM();

$car = new MileageCalculator();
$car->pricePerLiter = 125;
$car->distance= 300;
$car->totalFuelPrice= 2000;
$car->calculatorKM();