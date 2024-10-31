<?php
class Father{
    public $msg = "Message ABC";
    public function print100(){
        for ($i=0; $i<100; $i++){
            echo "$i <br/>"; 
        }
    }
}
class Son extends Father{
    //Empty
}
$objectSon = new Son();
echo $objectSon->msg;
$objectSon->print100();

$objectSon= new Father();
echo $objectSon->msg;
$objectSon->print100();