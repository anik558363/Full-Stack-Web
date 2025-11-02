<?php

/*

1. indexed array
2. associative array
3. multidimensional array

*/



/*-------    indexed array    ----------*/

$colors = array("red", "black", "blue", "yellow");
// echo $colors[1];
// echo "\n";
// $colors[3] = "white";
// print_r($colors);

// foreach ($colors as $key => $value) {
//    echo $value;
//    echo "\n";
// }


$fruits = ['apple', 'banana', "orange"];
// echo $fruits[2];
// echo "\n";
// print_r($fruits);

// for ($i=0; $i < count($fruits); $i++) { 
//     echo $fruits[$i];
//     echo "\n";
// }





// $cart = [];

// $cart[1] = 1;
// $cart[0] = "test";

// array_push($cart, 22);
// array_pop($cart);
// array_unshift($cart, 22);
// print_r($cart);



/*-------    associative array    ----------*/

// $cart = [
//     "product_name" => "laptop",
//     "processor" => "corei5"
// ];


// print_r($cart);
// echo $cart["product_name"];
// $key = array_keys($cart);
// print_r($key);
// $value = array_values($cart);
// print_r($value);


// $finalCart = [
//     [
//         'product' => 'laptop',
//         'price' => 10000,
//         'image' => 'laptop.jpg',
//         'quantity' => 1
//     ],
//     [
//         'product' => 'moitor',
//         'price' => 10000,
//         'image' => 'laptop.jpg',
//         'quantity' => 2
//     ]
// ];



// for ($i = 0; $i < count($finalCart); $i++) {

//     $keys = array_keys($finalCart[$i]); // key list ta alada korlam

//     for ($j = 0; $j < count($keys); $j++) {
//         $key = $keys[$j]; // ekta ekta kore key
//         $value = $finalCart[$i][$key]; // oi key er value
//         echo "$key: $value<br>";
//     }

//     echo "<br>";
// }


echo "<pre>";

// $cart = [[
//     'product' => 'test',
//     'price' => 100,
//     'image' => 'pen.jpg',
//     'quantity' => 5
// ]];

// // array_push($cart[0],"fasdf");
// array_pop($cart[0]);

// print_r($cart);


$num = [22, 9, 77];


// $odd_even = array_filter( $num, function($a){
//             if ($a % 2 == 1) {
//                 return $a; 
//             }
// });


// print_r($odd_even);


// $add_number = array_map(function($a) {
//    return $a + 2;
// }, $num);

// print_r($add_number);