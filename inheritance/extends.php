<?php

class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info(){
        echo "Employee Name : "." ".$this->name."</br>";
        echo "Employee Age : "." ".$this->age."</br>";
        echo "Employee Salary : "." ".$this->salary."</br>";
    }
}

//Creating inheritance of the parent class employee
class manager extends employee{
    function message(){
        echo "Manager ok";
    }
}



$e1 = new manager("Shovon",32, 2000);
$e1 -> info();
$e1 -> message();



?>
