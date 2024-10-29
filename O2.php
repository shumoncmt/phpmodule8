<?php
//Motorcycle Price Calculator

class MileageCalculators{
    public $pricePerLiter;
    public $distance;
    public $totalFuelPrice;
    function calculatorKM(){
        $totalFuel =$this->totalFuelPrice/$this->pricePerLiter;
        $mileage = $this->distance/$totalFuel;
        echo "The mileage of the vehicle is {$mileage} km \n";
    }
}

$motorcycle = new MileageCalculators();
$motorcycle->pricePerLiter= 122;
$motorcycle->distance = 100;
$motorcycle->totalFuelPrice = 800;
$motorcycle->calculatorKM();

$car = new MileageCalculators();
$car->pricePerLiter = 125;
$car->distance= 300;
$car->totalFuelPrice= 1500;
$car->calculatorKM();