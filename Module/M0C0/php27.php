<?php


// class Panda
// {

//     public $name;
//     public $age;



//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function sayHello(){
//         return $this->name;
//     }
// }


// $a = new Panda("anik", 22);


// echo $a->sayHello();



class Rectangle
{

    public $width;
    public $height;

    public function __construct($w, $h)
    {
        $this->width = $w;
        $this->height = $h;
    }


    public function getArea(){
        return $this->width * $this->height;
    }
}



$rect = new Rectangle(5, 10);

echo $rect->getArea();