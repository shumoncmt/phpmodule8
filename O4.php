<?php
class PetrolMileageCalculator{
    public $pricePerLiter= 150;
    public $distance;
    public $totalFuelPrice ;
    public function __construct($distance, $totalFuelPrice){
        $this->distance = $distance;
        $this->totalFuelPrice= $totalFuelPrice;
    }
    function calculatorKM(){
        $totalFuel= $this->totalFuelPrice/$this->pricePerLiter;
        $milage = $this->distance /$totalFuel;
        echo "The Milage of the vehicle is {$milage} Km and its run of parrol \n";
        
    }
}

class octanMilageCalculator{
    public $pricePerLiter = 150;
    public $distance;
    public $totalFuelPrice;

    public function __construct($distance, $totalFuelPrice){
        $this->distance = $distance;
        $this->totalFuelPrice = $totalFuelPrice;
    }
    function calculateKM(){
        $totalFuel = $this->totalFuelPrice/$this->pricePerLiter;
        $milage = $this->distance/$totalFuel;
        echo "The mileage of the Vehicle is {$milage} km and its run on octane \n";
    }
}


$car = new PetrolMileageCalculator(100, 300);
$car->calculatorKM();

$motorcycle = new octanMilageCalculator(100, 300);
$motorcycle->calculateKM();