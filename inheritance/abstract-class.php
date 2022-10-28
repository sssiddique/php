<?php

// If we don't want to give access of a class to anyone of this project to use directly then we will need abstract class.
// But if somebody wants to access the class then he has to create a derived class to access.
// So the step is, in the abstract class there must should have one abstract method.
// And in the derived class. the Abstract method must should have implemented.

abstract class parentClass{
    public $name;
    // This is a mandatory method and this method inside the class is always incomplete methods. They Declared, but now Implemented. That means this method does not contain any coding
    abstract protected function calc($a, $b);
}
class childClass extends parentClass{
    public function calc($a, $b){ // This parameter name can be changed. Not mandatory to have the same parameter name as the parent class.
        echo $a+$b;
    }
}

$test = new childClass();
$test->calc(20,30);


?>
