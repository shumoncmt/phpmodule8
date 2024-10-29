<?php
class DailyAccount {
    public function __construct(public $deposit){}
    private $items = [];
    function addItem($name, $cost){
        $this->items[$name] = $cost;
    }
    function createReport(){
        echo "Initial Deposit was {$this->deposit}.\n";
        $total = 0;
        foreach($this->items as $name =>$cost){
            echo "{$name} - {$cost} \n";
            $total +=$cost;
        }
        echo "----------------------------\n";
        echo "Total : {$total} \n";
        echo "Balance:". ($this->deposit - $total)."\n";
    }
}

$dailyAccount = new DailyAccount(1000); //instantiate
$dailyAccount->addItem("morice", 100);
$dailyAccount-> addItem("alu",100);
$dailyAccount->addItem("Dim", 180);
$dailyAccount->addItem("rice", 300);
$dailyAccount->createReport();