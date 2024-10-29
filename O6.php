<?php
class DailyAccount{
    public function __construct(public $deposit){}
    public $items;
    function addItem ($name, $cost){
        $this->items[$name] = $cost;
    }
    function createReport (){
        echo "Initial Deposit was {$this->deposit}.\n";
        $total = 0;
        foreach($this->items as $name=>$cost){
            echo "{$name} - {$cost} \n";
            $total += $cost;
        }
        echo "-----------------------\n";
        echo "Total : {$total} \n";
        echo "-----------------------\n";
        echo "Balance: " . ($this->deposit - $total) . "\n";
    }

}
$dailyAccount = new DailyAccount(1000);
$dailyAccount->addItem("kacha Morich", 100);
$dailyAccount->addItem("Alu", 50);
$dailyAccount->addItem("Dim",50);
$dailyAccount->addItem("Murgi",300);
$dailyAccount->addItem("Murgifz",300);
$dailyAccount->createReport();