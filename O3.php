<?php 

class MileageCalculator{
    public $pricePerLiter;
    public $distance;
    Public $totalFuelPrice;
    public function  __construct($pricePerLiter, $distance, $totalFuelPrice){
        $this->pricePerLiter = $pricePerLiter;
        $this->distance = $distance;
        $this->totalFuelPrice = $totalFuelPrice;

    }
    function calculatorKM(){
        $totalFuel = $this->totalFuelPrice/$this->pricePerLiter;
        $mileage = $this->distance/$totalFuel;
        echo "The Mileage of the {$mileage} \n";
    }
}
$motorcycle = new MileageCalculator(122, 200,5000);
$motorcycle->calculatorKM();

$bike =new MileageCalculator(130, 150, 500);
$bike->calculatorKM();

