<?php


$pandaFoods = array('bamboo', 'apple', 'orange'); // array
$pandaFoods = ['bamboo', 'apple', 'orange']; // array


class Panda
{
    public $name = "PANDA"; // string
    public $age = 20; // integer
    public $height = 1.75; // float
    public $isPanda = true; // boolean
}


$panda = new Panda();


echo "<pre>";
// echo var_dump($panda);
echo var_dump($panda->name);