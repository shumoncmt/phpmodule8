<?php
class car{
    public $color = "green";
    public function drive(){
        echo " Car Driving !";

    }

    public function __construct(){
        echo "I am Constructor ";
    }
}
$object = new car(); //We create a Object Here
echo $object->color;
$object->drive ();