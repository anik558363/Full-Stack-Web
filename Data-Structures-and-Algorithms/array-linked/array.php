<?php


// what is an array

/*

ans: an array is a collection of element stored in contiguous memory location.
ans: each element is accessed using an index (staring from 0)
ans: in php, array are flexible: they can hold integers, string, objects, and even mixed type



*/  


$array = [1, 2, 3, 4, 5];


$newArray = [];


for ($i=0; $i < count($array); $i++) { 
    
    if ($i == 2) {
        $newArray[$i] = "anik";
    } 
    $newArray[] = $array[$i];
    

}

$array = $newArray;


print_r($array);





?>