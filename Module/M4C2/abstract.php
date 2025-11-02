<?php


abstract class Shape{

    abstract function area();

}


class Circle extends Shape{

    public $redius;

    public function __construct($redius)
    {
        $this->redius = $redius;
    }

    public function area()
    {
        return pi() * $this->redius *  $this->redius;
    }

}

// $circle = new Circle(10);

// echo $circle->area();


abstract class Animal{


    protected $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    abstract function makeSound();

}

class Dog extends Animal{

    public function makeSound()
    {
        return $this->name . " barks";
    }

}


// $dog = new Dog;
// $dog->setName("dog");
// echo $dog->getName();

// echo $dog->makeSound();



?>