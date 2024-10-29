<?php

class parson{
    public $name;
    public $age;
    function  introduce(){
        echo "Hi, I am {$this->name}, and I am {$this->age} years Old \n" ;

    }
}
$joni = new parson(); //Object
$joni->name = "shakil";
$joni->age = 25;
$joni->introduce();
// echo "Hi, I am {$joni->name}, and I am {$joni->age} years Old \n" ;


$jow = new parson();
$jow->name= "Abir";
$jow->age = 36;
$jow->introduce();
// echo "Hi, I am {$jow->name}, I am {$joni->age} years Old";