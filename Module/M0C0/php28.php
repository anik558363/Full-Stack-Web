<?php


class BankAcount{


    // public $balance;
    private $balance;


    public function deposit($amount){
        $this->balance += $amount;
    }


    public function getBalance(){
        return $this->balance;
    }

}

$account = new BankAcount();


// $account->balance = 200;


$account->deposit(10);

echo $account->getBalance();




?>