<?php
// class fruit{
//     //code goes here Function call class
// }

class Fruit{
    public $name;
    public $color;
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}