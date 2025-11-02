<?php


$numS = [1, 3];


function sum(array $numS) {
    
    $sum = 0;

    foreach ($numS as $key => $value) {
        $sum += $value;
    }

    return $sum;

}


echo sum($numS);



?>