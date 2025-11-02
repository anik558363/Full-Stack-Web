<?php

// abstract class Getway{

//     protected $amount;

//     public function __construct($amount)
//     {
//         $this->amount = $amount;
//     }


//     abstract public function pay();

// }


// class Bkash extends Getway{

//     public function pay()
//     {
//         return "Paid, Left amout is $this->amount";
//     }


// }


// class Rocket extends Bkash{

//     public function rocketPay()
//     {
//         return "Paid Rocket, Left amout is $this->amount";
//     }


// }

// // $newGetway = new Getway(20);

// $bkash = new Bkash(10);

// echo $bkash->pay();


abstract class Shap{


    abstract public function getArea();

}


class Circle extends Shap{

    public $redius;

    public function __construct($redius)
    {
        return $this->redius = $redius;
    }


    public function getArea()
    {
        return pi() * $this->redius * $this->redius;
    }

}


$newCricle = new Circle(5);

echo $newCricle->getArea();


?>