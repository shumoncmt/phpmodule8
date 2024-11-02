<?php
class MileageCalculator{
    public $pricePerLiter;
    public $distance;
    public $totalFuelPrice;
    function calculateKM(){
        $totalFuel =  $this->totalFuelPrice/ $this->pricePerLiter;
        $mileage = $this->distance/$totalFuel;
        echo  "the Mileage of the vehicle is {$mileage} Km. \n";
    }
}

$motorcycle = new MileageCalculator();
$motorcycle->pricePerLiter = 130;
$motorcycle->distance = 150;
$motorcycle->totalFuelPrice = 1500;
$motorcycle->calculateKM();