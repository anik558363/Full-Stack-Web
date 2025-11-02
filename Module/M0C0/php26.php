<?php


class Introduction{

    public $name;


    public function sayHello(){
        echo "Hello, my name is ". $this->name . "!";
    }


}


$a = new Introduction();

$a->name = "anik";

$a->sayHello();


?>