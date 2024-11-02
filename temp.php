<?php
class person{
    public function  __construct($name){
        echo "I am a person and name is {$name}. \n";
    }
}

$jonn = new person("john");
$jene = new person("Jene");
$jimmy = new person( "Jimmy");

$fruits = [
    'apple' => 100,
    'banana' => 50,
    'orange' => 80
];
foreach($fruits as $fruit=>$price){
    echo "{$fruit} - {$price} \n";
}