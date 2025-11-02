<?php

// class BasePand
// {

//     public $name = "Panda";
//     public $age = 4;
// }

// class NewPanda extends BasePand{

//     public function sayHallo(){
//         return "Hello, my name is ". $this->name . "!";
//     }


// }


// $panda = new BasePand();

// echo $panda->name . "<br>";


// $in = new NewPanda();


// echo $in->sayHallo();



class Animal{

    public $name;


    public function __construct($name)
    {
        $this->name = $name;
    }


    public function speak(){
        return "$this->name Make a sound";
    }


}



class Dog extends Animal{


    public function speak(){
        return "$this->name Make a sound";
    }

}


// $newAnimal = new Animal("Buddy");


// echo $newAnimal->speak();


$newDog = new Dog("Buddy");


echo $newDog->speak();
