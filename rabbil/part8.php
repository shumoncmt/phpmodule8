<?php
class Father{
    public function __construct(){
        echo " This is Father Constructor";
    }
}
class son extends Father{

}
new son();