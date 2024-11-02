<?php
class Father{
    public $msg  = "Message ABC";
    public function print100(){
        for ($i=0; $i<=100; $i++){
            echo "$i" ."-------------------\n";
        }
    }
}

class Son extends Father{
    //override
    public function print100(){
        for($i=0;$i<=10; $i++){
            echo "$i" ."\n";
        }
    }
}

$objFather= new Father();
$objSon= new Son();

$objSon->print100();
$objFather->print100();
