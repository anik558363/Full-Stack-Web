<?php

class Person
{

    // normal variable ==> property

    public $name;


    // normal function ==> method

    public function getName()
    {
        return "hello my name is " . $this->name;
    }
}


// $person = new Person();
// $person->name = "anik";

// echo $person->getName();


class Product
{
    public $name;
    public $price;

    public function showDetails()
    {
        return "Product name is " . $this->name . ". Product price is " . $this->price;
    }
}


// $product = new Product();
// $product->name = "laptop";   
// $product->price = 50000;    

// echo $product->showDetails();


// class Demo
// {

//     private $x;
//     private $y;

//     public function show($x, $y)
//     {
//         echo $this->x = $x . "\n";
//         echo $this->y = $y . "\n";
//     }
// }


// $demo = new Demo();

// $demo->show(10, 20);



class AccountBalance
{
    private $balance;



    public function getBalance()
    {

        if (!isset($this->balance)) {
            $this->balance = 0; // Initialize balance if not set
        }

        return $this->balance;
    }

    public function withdraw($amount)
    {

        $this->balance -= $amount;
        echo "withdraw successful \n";
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "deposit successful \n";
    }
}


// $account = new AccountBalance();

// echo $account->getBalance() . "\n";

// $account->deposit(1000);


// echo $account->getBalance() . "\n";


// $account->withdraw(500);


// echo $account->getBalance() . "\n";



// class Demo
// {

//     private $x;
//     private $y;

//     public function __construct($x)
//     {
//         $this->x = $x;
       
//     }

//     public function getXY($y){
//         return "X: $this->x, Y: $y";
//     }
// }


// $demo = new Demo(20);
// echo $demo->getXY(20);



class Demo {

    public function __call($name, $arguments)
    {
        if ($name == 'sum') {
            if (count($arguments) == 2) {
                return $arguments[0] + $arguments[1];
            } elseif (count($arguments) == 3) {
                return $arguments[0] + $arguments[1] + $arguments[2];
            }
        }
    }

}

$demo = new Demo;

echo $demo->sum(10, 20) . "\n";     // Output: 30
echo $demo->sum(10, 20, 30) . "\n"; // Output: 60
