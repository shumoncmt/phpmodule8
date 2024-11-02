<?php
class person {
    public $name;
    public $age;
    function introduce(){
        echo "Hi, I am {$this->name}, and I am {$this->age} years Old.";

    }
}

$john = new person ();
$john->name ="John doe";
$john->age = 25;
$john->introduce();
//echo "Hi, I am {$john->name}, and I am {$john->age} years Old.";

//echo $john->name;
echo "\n";

$jane = new person(); //object Crated
$jane->name = "Jane Doe";
$jane->age = 23;
$jane->introduce();
//echo $jane->name;
//echo "Hi, I am {$jane->name}, and  I am {$jane->age};