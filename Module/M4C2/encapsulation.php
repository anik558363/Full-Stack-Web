<?php

class Person
{

    private $name;




    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    protected function sayHello() {}
}


$person = new Person();

$person->setName("anik");

echo $person->getName();
