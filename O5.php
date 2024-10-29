<?php
class mileageCalculator{
    public function  __construct(public $pricePerLiter, public $distance, public $totalFuelPrice){}
    function calculateKM(){
        $totalFuel =  $this->totalFuelPrice/$this->pricePerLiter;
        $mileage = $this->distance/$totalFuel;
        echo "The Mileage of the vehicle is {$mileage} \n";
    }

        
 }

 $motorcycle = new MileageCalculator( 122, 100, 400); //instantiate
 $motorcycle->calculateKM();


 $car = new MileageCalculator(122, 100, 2000);//instantiate
$car->calculateKM();

$hybridCar =new MileageCalculator(122, 100, 800);
$hybridCar->calculateKM();
