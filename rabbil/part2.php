<?php

class Car {
    public static $color= "Green";
    Public static function drive(){
        echo "Car is Driving";
    }
}
echo car::$color;
Car::drive();