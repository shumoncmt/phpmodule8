<?php
class DailyAccount{
    public function  __construct(public $deposit){}
    private $items = [];
    private $total = 0;
    function addItem($name, $cost){
        $this->total += $cost;
        if($this->total > $this->deposit){
            echo "Error: You don't have enough balance \n";
            $this->total -=$cost;
            return;
        }
        $this->items[$name] = $cost;
    }
    function createReport(){
        echo "Initial Deposit Was {$this->deposit}.\n";
        foreach($this->items as $name=>$cost){
            echo "{$name} - {$cost} \n";
        }
        echo "------------------------";
        echo "Total : {$this->total} \n";
        echo "Balance " . ($this->deposit - $this->total)."\n";
    }
}
$dailyAccount = new DailyAccount(1500); //instantiate
$dailyAccount->addItem("Kacha Morice", 100);
$dailyAccount-> addItem("Alu", 50);
$dailyAccount->addItem("Dim", 150);
$dailyAccount->addItem("murgi",300);
$dailyAccount->addItem("Ghee",200);
$dailyAccount->createReport();