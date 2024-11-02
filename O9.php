<?php
class car{
    public function doSomething(){
        $this->start();
        $this->honk();
    }
    public function start(){
        echo "Car has started \n";
    }
    private function honk(){
        echo "Honk has Honk \n";
    }
}

$fortuner = new car();
$fortuner->doSomething();