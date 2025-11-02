<?php


// $numbers = [1, 3, 2, 4];

// $numbers [2] = "anik";


// print_r($numbers);


$numbers = [1, 3, 2, 4];


// $n = array_slice($numbers, 1, 1);
$n = array_splice($numbers, 1, 1, "anik");



print_r($numbers);

?>