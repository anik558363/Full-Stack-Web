<?php

// $numbers = [3, 4, 7, 1];

// sort($numbers);
// rsort($numbers);

// print_r($numbers);



$numbers = [1, 2, 3, 4, 5];

 
// $filterNumbers = array_filter($numbers, function ($numbers){
//     return $numbers % 2 === 0;
// });


// print_r($filterNumbers)


$mapIngData = array_map(function ($numbers){
    return $numbers + 2;
}, $numbers);


print_r($mapIngData);

?>