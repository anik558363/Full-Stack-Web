<?php


class Person{

    public function introduce(){
        echo "I am Person \n";
    }

}


class Student extends Person{


    public function introduce()
    {
        echo "I am Student \n";
    }

}

class Employee extends Person{


    public function introduce()
    {
        echo "I am Employee \n";
    }

}

$person = new Person();
$person->introduce();

$person = new Employee();
$person->introduce();



?>