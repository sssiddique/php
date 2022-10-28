<?php
// Interface is likely abstract class. We can not make any direct object of the interface. Interface can inherit multiple class into one class
// Lets we have three classes. Class A, B, C, D we want to inherit all the classes to class B where B is the inherited class of class A.
// In this case we will declare all the classes as interface instead of class, But the derived class is also here named as derived class.
// We can not create any property or variable inside an interface. Neither can assign any value to those properties.
// Here on this interface we will not give any access modifier to the methods.
// Here we will declare multiple methods but will not implement them in then main class / interface. All coding will exist on the derived class.
// We can not create any object of the interface
// In interface we only can declare the methods. But we can not deploy there. We can deploy them inside implements
interface interface_name{
    function hello($n);
}
// In interface we only can declare the methods. But we can not deploy there. We can deploy them inside implements
interface newInt{
    function hi($n);
    function bye();
}

// We can inherit multiple interfaces with a single implements. Then we just have to separate them by comma.
// Now we want to inherit both of the interfaces to another class then -
// In interface we only can declare the methods. But we can not deploy there. We can deploy them inside implements
class newClass implements interface_name, newInt{
    public function hello($n){
        echo "Hello ".$n;
    }

    public function hi($n){
        echo "Hi ".$n;
    }

    public function bye(){
        echo "bye with no parameter";
    }
}

$test = new newClass();
$test->hello('world');
