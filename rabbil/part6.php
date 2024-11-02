<?php
// class Father {

//     public $msg="Message ABC";

//     final public function print100() {
//         for($i=0;$i<=100;$i++){
//          echo "$i <br/>";
//         }
//      }
// }

// class Son extends Father{
   

//     //override
//     public function print100() {
//         for($i=0;$i<=10;$i++){
//          echo "$i <br/>";
//         }
//      }

// }


// $objFather= new Father();
// $objSon= new Son();


// $objFather->print100();
// $objSon->print100();

class BaseClass{
    public function test(){
        echo "BaseClass :: Test () called \n";
    }
  final public function moreTesting(){
        echo "BaseClass :: MoreTesting() called \n";
    }
}

class childClass extends BaseClass{
    public function moreTesting(){
        echo "ChildClass::moreTesting() called\n";
     }
}
//Results in Fatal Error: Cannot override final method BaseClass()