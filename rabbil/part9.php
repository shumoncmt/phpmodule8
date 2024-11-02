<?php
class Father{
    public function __construct(){
        echo "This is Father Constructor";
    }
}
class son extends Father{
    public function __construct(){
        echo "This is Soon Constructor";
    }
}
new Father();
echo "\n";
new son();